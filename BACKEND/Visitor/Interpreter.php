<?php

namespace Visitor;

use GolampiBaseVisitor;

require_once "Environment.php";

class Interpreter extends GolampiBaseVisitor
{
    public $output = "";

    private $environment;

    public function __construct()
    {
        $this->environment = new Environment();
    }

    /*
    ========================
    PROGRAM
    ========================
    */
    public function visitProgram($ctx)
    {
        foreach ($ctx->declaration() as $decl) {
            $this->visit($decl);
        }

        return $this->output;
    }

    /*
    ========================
    DECLARATION
    ========================
    */
    public function visitDeclaration($ctx)
    {
        if ($ctx->varDecl()) {
            return $this->visit($ctx->varDecl());
        }

        if ($ctx->constDecl()) {
            return $this->visit($ctx->constDecl());
        }

        if ($ctx->statement()) {
            return $this->visit($ctx->statement());
        }

        return null;
    }

    /*
    ========================
    VARIABLE DECLARATION
    ========================
    */
    public function visitVarDecl($ctx)
    {
        $ids = $ctx->idList()->ID();
        $values = [];

        if ($ctx->exprList()) {
            $values = $this->visit($ctx->exprList());
        }

        foreach ($ids as $i => $id) {

            $name = $id->getText();
            $value = $values[$i] ?? null;

            $this->environment->define($name, $value);
        }

        return null;
    }

    /*
    ========================
    CONSTANT DECLARATION
    ========================
    */
    public function visitConstDecl($ctx)
    {
        $name = $ctx->ID()->getText();

        $value = $this->visit($ctx->expression());

        $this->environment->defineConst($name, $value);

        return $value;
    }

    /*
    ========================
    ASSIGNMENT
    ========================
    */
    public function visitAssignment($ctx)
    {
        $name = $ctx->expression(0)->getText();

        $right = $this->visit($ctx->expression(1));

        $operator = $ctx->assignOp()->getText();

        $left = $this->environment->get($name);

        if ($left === null || $right === null) {
            $this->environment->assign($name, null);
            return null;
        }

        $result = null;

        switch ($operator) {

            case '=':
                $result = $right;
                break;

            case '+=':
                $result = $left + $right;
                break;

            case '-=':
                $result = $left - $right;
                break;

            case '*=':
                $result = $left * $right;
                break;

            case '/=':
                $result = $left / $right;
                break;
        }

        $this->environment->assign($name, $result);

        return $result;
    }

    /*
    ========================
    BLOCK
    ========================
    */
    public function visitBlock($ctx)
    {
        $previous = $this->environment;

        $this->environment = $previous->createChild();

        foreach ($ctx->statement() as $stmt) {
            $this->visit($stmt);
        }

        $this->environment = $previous;

        return null;
    }

    /*
    ========================
    PRIMARY
    ========================
    */
    public function visitPrimary($ctx)
    {
        if ($ctx->literal()) {
            return $this->visit($ctx->literal());
        }

        if ($ctx->builtinCall()) {
            return $this->visit($ctx->builtinCall());
        }

        if ($ctx->ID()) {

            $name = $ctx->ID()->getText();

            return $this->environment->get($name);
        }

        if ($ctx->expression()) {
            return $this->visit($ctx->expression());
        }

        return null;
    }

    /*
    ========================
    LITERAL
    ========================
    */
    public function visitLiteral($ctx)
    {
        if ($ctx->INT()) {
            return intval($ctx->INT()->getText());
        }

        if ($ctx->FLOAT()) {
            return floatval($ctx->FLOAT()->getText());
        }

        if ($ctx->STRING()) {
            return trim($ctx->STRING()->getText(), '"');
        }

        if ($ctx->RUNE()) {
            return trim($ctx->RUNE()->getText(), "'");
        }

        if ($ctx->getText() === "true") {
            return true;
        }

        if ($ctx->getText() === "false") {
            return false;
        }

        if ($ctx->getText() === "nil") {
            return null;
        }

        return $ctx->getText();
    }

    /*
    ========================
    EXPRESSION
    ========================
    */
    public function visitExpression($ctx)
    {
        return $this->visitChildren($ctx);
    }

    /*
    ========================
    EXPRESSION LIST
    ========================
    */
    public function visitExprList($ctx)
    {
        $values = [];

        foreach ($ctx->expression() as $expr) {
            $values[] = $this->visit($expr);
        }

        return $values;
    }

    /*
    ========================
    BUILTIN CALLS
    ========================
    */
    public function visitBuiltinCall($ctx)
    {
        $text = $ctx->getText();

        // fmt.Println
        if (str_starts_with($text, "fmt.Println")) {

            $values = [];

            if ($ctx->exprList()) {
                foreach ($ctx->exprList()->expression() as $expr) {
                    $values[] = $this->visit($expr);
                }
            }

            // 🔹 convertir null → "nil"
            foreach ($values as &$v) {
                if ($v === null) {
                    $v = "nil";
                }
            }

            $this->output .= implode(" ", $values) . "\n";

            return null;
        }

        // len()
        if (str_starts_with($text, "len")) {

            $value = $this->visit($ctx->expression());

            return strlen($value);
        }

        // now()
        if (str_starts_with($text, "now")) {
            return date("Y-m-d H:i:s");
        }

        return null;
    }

    /*
    ========================
    EXPRESSION STATEMENT
    ========================
    */
    public function visitExprStmt($ctx)
    {
        return $this->visit($ctx->expression());
    }
}