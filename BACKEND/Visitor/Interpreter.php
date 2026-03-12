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

        if ($right === null) {
            $this->environment->assign($name, null);
            return null;
        }

        $result = null;

        switch ($operator) {

            case '=':
                $result = $right;
                break;

            case '+=':
                $result = $this->add($left, $right);
                break;

            case '-=':
                $result = $this->sub($left, $right);
                break;

            case '*=':
                $result = $this->mul($left, $right);
                break;

            case '/=':
                $result = $this->div($left, $right);
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
    ADDITIVE (+ -)
    ========================
    */
    public function visitAdditive($ctx)
    {
        $result = $this->visit($ctx->multiplicative(0));

        for ($i = 1; $i < count($ctx->multiplicative()); $i++) {

            $right = $this->visit($ctx->multiplicative($i));
            $op = $ctx->getChild(2*$i-1)->getText();

            if ($op == "+") {
                $result = $this->add($result, $right);
            } else {
                $result = $this->sub($result, $right);
            }
        }

        return $result;
    }

    /*
    ========================
    MULTIPLICATIVE (* / %)
    ========================
    */
    public function visitMultiplicative($ctx)
    {
        $result = $this->visit($ctx->unary(0));

        for ($i = 1; $i < count($ctx->unary()); $i++) {

            $right = $this->visit($ctx->unary($i));
            $op = $ctx->getChild(2*$i-1)->getText();

            switch ($op) {

                case "*":
                    $result = $this->mul($result, $right);
                    break;

                case "/":
                    $result = $this->div($result, $right);
                    break;

                case "%":
                    $result = $this->mod($result, $right);
                    break;
            }
        }

        return $result;
    }

    /*
    ========================
    UNARY (-)
    ========================
    */
    public function visitUnary($ctx)
    {
        if ($ctx->getChildCount() == 2) {

            $value = $this->visit($ctx->unary());

            if ($value === null) return null;

            if (is_int($value) || is_float($value)) {
                return -$value;
            }

            if ($this->isRune($value)) {
                return -ord($value);
            }

            return null;
        }

        return $this->visitChildren($ctx);
    }

    /*
    ========================
    EQUALITY (== !=)
    ========================
    */
    public function visitEquality($ctx)
    {
        $result = $this->visit($ctx->relational(0));

        for ($i = 1; $i < count($ctx->relational()); $i++) {

            $right = $this->visit($ctx->relational($i));
            $op = $ctx->getChild(2*$i-1)->getText();

            if ($op == "==") {
                $result = $this->equal($result, $right);
            } else {
                $result = $this->notEqual($result, $right);
            }
        }

        return $result;
    }

    /*
    ========================
    COMPARISON (> < >= <=)
    ========================
    */
    public function visitRelational($ctx)
    {
        $result = $this->visit($ctx->additive(0));

        for ($i = 1; $i < count($ctx->additive()); $i++) {

            $right = $this->visit($ctx->additive($i));
            $op = $ctx->getChild(2*$i-1)->getText();

            switch ($op) {

                case ">":
                    $result = $this->greater($result, $right);
                    break;

                case ">=":
                    $result = $this->greaterEqual($result, $right);
                    break;

                case "<":
                    $result = $this->less($result, $right);
                    break;

                case "<=":
                    $result = $this->lessEqual($result, $right);
                    break;
            }
        }

        return $result;
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

        if (str_starts_with($text, "fmt.Println")) {

            $values = [];

            if ($ctx->exprList()) {
                foreach ($ctx->exprList()->expression() as $expr) {
                    $values[] = $this->visit($expr);
                }
            }

            foreach ($values as &$v) {
                if ($v === null) {
                    $v = "nil";
                }

                if (is_bool($v)) {
                    $v = $v ? "true" : "false";
                }
            }

            $this->output .= implode(" ", $values) . "\n";

            return null;
        }

        if (str_starts_with($text, "len")) {

            $value = $this->visit($ctx->expression());

            return strlen($value);
        }

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

    /*
    ========================
    HELPERS
    ========================
    */

    private function isRune($value)
    {
        return is_string($value) && strlen($value) === 1;
    }

    private function add($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if (is_string($a) && is_string($b)) {
            return $a . $b;
        }

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_numeric($a) && is_numeric($b)) {

            if (is_float($a) || is_float($b)) {
                return floatval($a) + floatval($b);
            }

            return $a + $b;
        }

        return null;
    }

    private function sub($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_numeric($a) && is_numeric($b)) {

            if (is_float($a) || is_float($b)) {
                return floatval($a) - floatval($b);
            }

            return $a - $b;
        }

        return null;
    }

    private function mul($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if (is_string($a) && is_int($b)) {
            return str_repeat($a, $b);
        }

        if (is_string($b) && is_int($a)) {
            return str_repeat($b, $a);
        }

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_numeric($a) && is_numeric($b)) {

            if (is_float($a) || is_float($b)) {
                return floatval($a) * floatval($b);
            }

            return $a * $b;
        }

        return null;
    }

    private function div($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if ($b == 0) return null;

        if (is_numeric($a) && is_numeric($b)) {

            if (is_float($a) || is_float($b)) {
                return floatval($a) / floatval($b);
            }

            return intdiv($a, $b);
        }

        return null;
    }

    private function mod($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_int($a) && is_int($b)) {
            return $a % $b;
        }

        return null;
    }

    private function equal($a, $b)
    {
        if ($a === null || $b === null) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_bool($a) && is_bool($b)) {
            return $a === $b;
        }

        if (is_string($a) && is_string($b)) {
            return $a === $b;
        }

        if (is_numeric($a) && is_numeric($b)) {
            return $a == $b;
        }

        return null;
    }

    private function notEqual($a, $b)
    {
        $result = $this->equal($a, $b);

        if ($result === null) return null;

        return !$result;
    }

    private function greater($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_string($a) && is_string($b)) {
            return $a > $b;
        }

        if (is_numeric($a) && is_numeric($b)) {
            return $a > $b;
        }

        return null;
    }

    private function greaterEqual($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_string($a) && is_string($b)) {
            return $a >= $b;
        }

        if (is_numeric($a) && is_numeric($b)) {
            return $a >= $b;
        }

        return null;
    }

    private function less($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_string($a) && is_string($b)) {
            return $a < $b;
        }

        if (is_numeric($a) && is_numeric($b)) {
            return $a < $b;
        }

        return null;
    }

    private function lessEqual($a, $b)
    {
        if ($a === null || $b === null) return null;

        if (is_bool($a) || is_bool($b)) return null;

        if ($this->isRune($a)) $a = ord($a);
        if ($this->isRune($b)) $b = ord($b);

        if (is_string($a) && is_string($b)) {
            return $a <= $b;
        }

        if (is_numeric($a) && is_numeric($b)) {
            return $a <= $b;
        }

        return null;
    }
}