<?php

require_once __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/../ANTLR/GolampiLexer.php';
require_once __DIR__ . '/../ANTLR/GolampiParser.php';
require_once __DIR__ . '/../ANTLR/GolampiVisitor.php';
require_once __DIR__ . '/../ANTLR/GolampiBaseVisitor.php';

require_once __DIR__ . '/../Visitor/Interpreter.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Visitor\Interpreter;

header("Content-Type: application/json");

$code = $_POST["code"] ?? "";

$input = InputStream::fromString($code);

$lexer = new GolampiLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new GolampiParser($tokens);

$tree = $parser->program();

$visitor = new Interpreter();
$visitor->visit($tree);

echo json_encode([
    "output" => $visitor->output
]);