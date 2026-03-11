<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.2
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GolampiParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, T__31 = 32, 
               T__32 = 33, T__33 = 34, T__34 = 35, T__35 = 36, T__36 = 37, 
               T__37 = 38, T__38 = 39, T__39 = 40, T__40 = 41, T__41 = 42, 
               T__42 = 43, T__43 = 44, T__44 = 45, T__45 = 46, T__46 = 47, 
               T__47 = 48, T__48 = 49, T__49 = 50, T__50 = 51, T__51 = 52, 
               T__52 = 53, T__53 = 54, T__54 = 55, T__55 = 56, T__56 = 57, 
               T__57 = 58, T__58 = 59, ID = 60, INT = 61, FLOAT = 62, STRING = 63, 
               RUNE = 64, LINE_COMMENT = 65, BLOCK_COMMENT = 66, WS = 67;

		public const RULE_program = 0, RULE_declaration = 1, RULE_varDecl = 2, 
               RULE_constDecl = 3, RULE_functionDecl = 4, RULE_parameters = 5, 
               RULE_parameter = 6, RULE_pointer = 7, RULE_returnType = 8, 
               RULE_typeList = 9, RULE_type = 10, RULE_primitiveType = 11, 
               RULE_arrayType = 12, RULE_statement = 13, RULE_block = 14, 
               RULE_shortVarDecl = 15, RULE_assignment = 16, RULE_assignOp = 17, 
               RULE_exprStmt = 18, RULE_ifStmt = 19, RULE_switchStmt = 20, 
               RULE_caseClause = 21, RULE_defaultClause = 22, RULE_forStmt = 23, 
               RULE_forClause = 24, RULE_forInit = 25, RULE_breakStmt = 26, 
               RULE_continueStmt = 27, RULE_returnStmt = 28, RULE_expression = 29, 
               RULE_logicalOr = 30, RULE_logicalAnd = 31, RULE_equality = 32, 
               RULE_relational = 33, RULE_additive = 34, RULE_multiplicative = 35, 
               RULE_unary = 36, RULE_postfix = 37, RULE_incrementOp = 38, 
               RULE_index = 39, RULE_call = 40, RULE_primary = 41, RULE_builtinCall = 42, 
               RULE_exprList = 43, RULE_idList = 44, RULE_literal = 45;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'declaration', 'varDecl', 'constDecl', 'functionDecl', 'parameters', 
			'parameter', 'pointer', 'returnType', 'typeList', 'type', 'primitiveType', 
			'arrayType', 'statement', 'block', 'shortVarDecl', 'assignment', 'assignOp', 
			'exprStmt', 'ifStmt', 'switchStmt', 'caseClause', 'defaultClause', 'forStmt', 
			'forClause', 'forInit', 'breakStmt', 'continueStmt', 'returnStmt', 'expression', 
			'logicalOr', 'logicalAnd', 'equality', 'relational', 'additive', 'multiplicative', 
			'unary', 'postfix', 'incrementOp', 'index', 'call', 'primary', 'builtinCall', 
			'exprList', 'idList', 'literal'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'var'", "'='", "'const'", "'func'", "'('", "')'", "','", "'*'", 
		    "'int32'", "'float32'", "'bool'", "'rune'", "'string'", "'['", "']'", 
		    "'{'", "'}'", "':='", "'+='", "'-='", "'*='", "'/='", "'if'", "'else'", 
		    "'switch'", "'case'", "':'", "'default'", "'for'", "';'", "'break'", 
		    "'continue'", "'return'", "'||'", "'&&'", "'=='", "'!='", "'>'", "'>='", 
		    "'<'", "'<='", "'+'", "'-'", "'/'", "'%'", "'!'", "'&'", "'++'", "'--'", 
		    "'fmt'", "'.'", "'Println'", "'len'", "'now'", "'substr'", "'typeOf'", 
		    "'true'", "'false'", "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, "ID", "INT", "FLOAT", "STRING", "RUNE", 
		    "LINE_COMMENT", "BLOCK_COMMENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 67, 420, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 1, 0, 5, 0, 94, 8, 0, 10, 0, 
		    12, 0, 97, 9, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 105, 8, 
		    1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 112, 8, 2, 1, 3, 1, 3, 1, 3, 
		    1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 124, 8, 4, 1, 4, 1, 
		    4, 3, 4, 128, 8, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 5, 5, 135, 8, 5, 
		    10, 5, 12, 5, 138, 9, 5, 1, 6, 3, 6, 141, 8, 6, 1, 6, 1, 6, 1, 6, 
		    1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 153, 8, 8, 1, 9, 1, 
		    9, 1, 9, 5, 9, 158, 8, 9, 10, 9, 12, 9, 161, 9, 9, 1, 10, 1, 10, 3, 
		    10, 165, 8, 10, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 
		    13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 1, 13, 3, 13, 186, 8, 13, 1, 14, 1, 14, 5, 14, 190, 8, 14, 
		    10, 14, 12, 14, 193, 9, 14, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 
		    15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 18, 1, 18, 1, 19, 
		    1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 3, 19, 215, 8, 19, 3, 19, 217, 
		    8, 19, 1, 20, 1, 20, 1, 20, 1, 20, 5, 20, 223, 8, 20, 10, 20, 12, 
		    20, 226, 9, 20, 1, 20, 3, 20, 229, 8, 20, 1, 20, 1, 20, 1, 21, 1, 
		    21, 1, 21, 1, 21, 5, 21, 237, 8, 21, 10, 21, 12, 21, 240, 9, 21, 1, 
		    22, 1, 22, 1, 22, 5, 22, 245, 8, 22, 10, 22, 12, 22, 248, 9, 22, 1, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 
		    3, 23, 260, 8, 23, 1, 24, 3, 24, 263, 8, 24, 1, 24, 1, 24, 3, 24, 
		    267, 8, 24, 1, 24, 1, 24, 3, 24, 271, 8, 24, 1, 25, 1, 25, 3, 25, 
		    275, 8, 25, 1, 26, 1, 26, 1, 27, 1, 27, 1, 28, 1, 28, 3, 28, 283, 
		    8, 28, 1, 29, 1, 29, 1, 30, 1, 30, 1, 30, 5, 30, 290, 8, 30, 10, 30, 
		    12, 30, 293, 9, 30, 1, 31, 1, 31, 1, 31, 5, 31, 298, 8, 31, 10, 31, 
		    12, 31, 301, 9, 31, 1, 32, 1, 32, 1, 32, 5, 32, 306, 8, 32, 10, 32, 
		    12, 32, 309, 9, 32, 1, 33, 1, 33, 1, 33, 5, 33, 314, 8, 33, 10, 33, 
		    12, 33, 317, 9, 33, 1, 34, 1, 34, 1, 34, 5, 34, 322, 8, 34, 10, 34, 
		    12, 34, 325, 9, 34, 1, 35, 1, 35, 1, 35, 5, 35, 330, 8, 35, 10, 35, 
		    12, 35, 333, 9, 35, 1, 36, 1, 36, 1, 36, 3, 36, 338, 8, 36, 1, 37, 
		    1, 37, 1, 37, 1, 37, 5, 37, 344, 8, 37, 10, 37, 12, 37, 347, 9, 37, 
		    1, 38, 1, 38, 1, 39, 1, 39, 1, 39, 1, 39, 1, 40, 1, 40, 3, 40, 357, 
		    8, 40, 1, 40, 1, 40, 1, 41, 1, 41, 1, 41, 1, 41, 1, 41, 1, 41, 1, 
		    41, 3, 41, 368, 8, 41, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 3, 42, 375, 
		    8, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 
		    42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 
		    1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 3, 42, 400, 8, 42, 1, 43, 1, 43, 
		    1, 43, 5, 43, 405, 8, 43, 10, 43, 12, 43, 408, 9, 43, 1, 44, 1, 44, 
		    1, 44, 5, 44, 413, 8, 44, 10, 44, 12, 44, 416, 9, 44, 1, 45, 1, 45, 
		    1, 45, 0, 0, 46, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 
		    28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 
		    62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 88, 90, 0, 9, 
		    1, 0, 9, 13, 2, 0, 2, 2, 19, 22, 1, 0, 36, 37, 1, 0, 38, 41, 1, 0, 
		    42, 43, 2, 0, 8, 8, 44, 45, 3, 0, 8, 8, 43, 43, 46, 47, 1, 0, 48, 
		    49, 2, 0, 57, 59, 61, 64, 431, 0, 95, 1, 0, 0, 0, 2, 104, 1, 0, 0, 
		    0, 4, 106, 1, 0, 0, 0, 6, 113, 1, 0, 0, 0, 8, 119, 1, 0, 0, 0, 10, 
		    131, 1, 0, 0, 0, 12, 140, 1, 0, 0, 0, 14, 145, 1, 0, 0, 0, 16, 152, 
		    1, 0, 0, 0, 18, 154, 1, 0, 0, 0, 20, 164, 1, 0, 0, 0, 22, 166, 1, 
		    0, 0, 0, 24, 168, 1, 0, 0, 0, 26, 185, 1, 0, 0, 0, 28, 187, 1, 0, 
		    0, 0, 30, 196, 1, 0, 0, 0, 32, 200, 1, 0, 0, 0, 34, 204, 1, 0, 0, 
		    0, 36, 206, 1, 0, 0, 0, 38, 208, 1, 0, 0, 0, 40, 218, 1, 0, 0, 0, 
		    42, 232, 1, 0, 0, 0, 44, 241, 1, 0, 0, 0, 46, 259, 1, 0, 0, 0, 48, 
		    262, 1, 0, 0, 0, 50, 274, 1, 0, 0, 0, 52, 276, 1, 0, 0, 0, 54, 278, 
		    1, 0, 0, 0, 56, 280, 1, 0, 0, 0, 58, 284, 1, 0, 0, 0, 60, 286, 1, 
		    0, 0, 0, 62, 294, 1, 0, 0, 0, 64, 302, 1, 0, 0, 0, 66, 310, 1, 0, 
		    0, 0, 68, 318, 1, 0, 0, 0, 70, 326, 1, 0, 0, 0, 72, 337, 1, 0, 0, 
		    0, 74, 339, 1, 0, 0, 0, 76, 348, 1, 0, 0, 0, 78, 350, 1, 0, 0, 0, 
		    80, 354, 1, 0, 0, 0, 82, 367, 1, 0, 0, 0, 84, 399, 1, 0, 0, 0, 86, 
		    401, 1, 0, 0, 0, 88, 409, 1, 0, 0, 0, 90, 417, 1, 0, 0, 0, 92, 94, 
		    3, 2, 1, 0, 93, 92, 1, 0, 0, 0, 94, 97, 1, 0, 0, 0, 95, 93, 1, 0, 
		    0, 0, 95, 96, 1, 0, 0, 0, 96, 98, 1, 0, 0, 0, 97, 95, 1, 0, 0, 0, 
		    98, 99, 5, 0, 0, 1, 99, 1, 1, 0, 0, 0, 100, 105, 3, 4, 2, 0, 101, 
		    105, 3, 6, 3, 0, 102, 105, 3, 8, 4, 0, 103, 105, 3, 26, 13, 0, 104, 
		    100, 1, 0, 0, 0, 104, 101, 1, 0, 0, 0, 104, 102, 1, 0, 0, 0, 104, 
		    103, 1, 0, 0, 0, 105, 3, 1, 0, 0, 0, 106, 107, 5, 1, 0, 0, 107, 108, 
		    3, 88, 44, 0, 108, 111, 3, 20, 10, 0, 109, 110, 5, 2, 0, 0, 110, 112, 
		    3, 86, 43, 0, 111, 109, 1, 0, 0, 0, 111, 112, 1, 0, 0, 0, 112, 5, 
		    1, 0, 0, 0, 113, 114, 5, 3, 0, 0, 114, 115, 5, 60, 0, 0, 115, 116, 
		    3, 20, 10, 0, 116, 117, 5, 2, 0, 0, 117, 118, 3, 58, 29, 0, 118, 7, 
		    1, 0, 0, 0, 119, 120, 5, 4, 0, 0, 120, 121, 5, 60, 0, 0, 121, 123, 
		    5, 5, 0, 0, 122, 124, 3, 10, 5, 0, 123, 122, 1, 0, 0, 0, 123, 124, 
		    1, 0, 0, 0, 124, 125, 1, 0, 0, 0, 125, 127, 5, 6, 0, 0, 126, 128, 
		    3, 16, 8, 0, 127, 126, 1, 0, 0, 0, 127, 128, 1, 0, 0, 0, 128, 129, 
		    1, 0, 0, 0, 129, 130, 3, 28, 14, 0, 130, 9, 1, 0, 0, 0, 131, 136, 
		    3, 12, 6, 0, 132, 133, 5, 7, 0, 0, 133, 135, 3, 12, 6, 0, 134, 132, 
		    1, 0, 0, 0, 135, 138, 1, 0, 0, 0, 136, 134, 1, 0, 0, 0, 136, 137, 
		    1, 0, 0, 0, 137, 11, 1, 0, 0, 0, 138, 136, 1, 0, 0, 0, 139, 141, 3, 
		    14, 7, 0, 140, 139, 1, 0, 0, 0, 140, 141, 1, 0, 0, 0, 141, 142, 1, 
		    0, 0, 0, 142, 143, 5, 60, 0, 0, 143, 144, 3, 20, 10, 0, 144, 13, 1, 
		    0, 0, 0, 145, 146, 5, 8, 0, 0, 146, 15, 1, 0, 0, 0, 147, 153, 3, 20, 
		    10, 0, 148, 149, 5, 5, 0, 0, 149, 150, 3, 18, 9, 0, 150, 151, 5, 6, 
		    0, 0, 151, 153, 1, 0, 0, 0, 152, 147, 1, 0, 0, 0, 152, 148, 1, 0, 
		    0, 0, 153, 17, 1, 0, 0, 0, 154, 159, 3, 20, 10, 0, 155, 156, 5, 7, 
		    0, 0, 156, 158, 3, 20, 10, 0, 157, 155, 1, 0, 0, 0, 158, 161, 1, 0, 
		    0, 0, 159, 157, 1, 0, 0, 0, 159, 160, 1, 0, 0, 0, 160, 19, 1, 0, 0, 
		    0, 161, 159, 1, 0, 0, 0, 162, 165, 3, 22, 11, 0, 163, 165, 3, 24, 
		    12, 0, 164, 162, 1, 0, 0, 0, 164, 163, 1, 0, 0, 0, 165, 21, 1, 0, 
		    0, 0, 166, 167, 7, 0, 0, 0, 167, 23, 1, 0, 0, 0, 168, 169, 5, 14, 
		    0, 0, 169, 170, 3, 58, 29, 0, 170, 171, 5, 15, 0, 0, 171, 172, 3, 
		    20, 10, 0, 172, 25, 1, 0, 0, 0, 173, 186, 3, 28, 14, 0, 174, 186, 
		    3, 4, 2, 0, 175, 186, 3, 6, 3, 0, 176, 186, 3, 30, 15, 0, 177, 186, 
		    3, 32, 16, 0, 178, 186, 3, 38, 19, 0, 179, 186, 3, 40, 20, 0, 180, 
		    186, 3, 46, 23, 0, 181, 186, 3, 52, 26, 0, 182, 186, 3, 54, 27, 0, 
		    183, 186, 3, 56, 28, 0, 184, 186, 3, 36, 18, 0, 185, 173, 1, 0, 0, 
		    0, 185, 174, 1, 0, 0, 0, 185, 175, 1, 0, 0, 0, 185, 176, 1, 0, 0, 
		    0, 185, 177, 1, 0, 0, 0, 185, 178, 1, 0, 0, 0, 185, 179, 1, 0, 0, 
		    0, 185, 180, 1, 0, 0, 0, 185, 181, 1, 0, 0, 0, 185, 182, 1, 0, 0, 
		    0, 185, 183, 1, 0, 0, 0, 185, 184, 1, 0, 0, 0, 186, 27, 1, 0, 0, 0, 
		    187, 191, 5, 16, 0, 0, 188, 190, 3, 26, 13, 0, 189, 188, 1, 0, 0, 
		    0, 190, 193, 1, 0, 0, 0, 191, 189, 1, 0, 0, 0, 191, 192, 1, 0, 0, 
		    0, 192, 194, 1, 0, 0, 0, 193, 191, 1, 0, 0, 0, 194, 195, 5, 17, 0, 
		    0, 195, 29, 1, 0, 0, 0, 196, 197, 3, 88, 44, 0, 197, 198, 5, 18, 0, 
		    0, 198, 199, 3, 86, 43, 0, 199, 31, 1, 0, 0, 0, 200, 201, 3, 58, 29, 
		    0, 201, 202, 3, 34, 17, 0, 202, 203, 3, 58, 29, 0, 203, 33, 1, 0, 
		    0, 0, 204, 205, 7, 1, 0, 0, 205, 35, 1, 0, 0, 0, 206, 207, 3, 58, 
		    29, 0, 207, 37, 1, 0, 0, 0, 208, 209, 5, 23, 0, 0, 209, 210, 3, 58, 
		    29, 0, 210, 216, 3, 28, 14, 0, 211, 214, 5, 24, 0, 0, 212, 215, 3, 
		    38, 19, 0, 213, 215, 3, 28, 14, 0, 214, 212, 1, 0, 0, 0, 214, 213, 
		    1, 0, 0, 0, 215, 217, 1, 0, 0, 0, 216, 211, 1, 0, 0, 0, 216, 217, 
		    1, 0, 0, 0, 217, 39, 1, 0, 0, 0, 218, 219, 5, 25, 0, 0, 219, 220, 
		    3, 58, 29, 0, 220, 224, 5, 16, 0, 0, 221, 223, 3, 42, 21, 0, 222, 
		    221, 1, 0, 0, 0, 223, 226, 1, 0, 0, 0, 224, 222, 1, 0, 0, 0, 224, 
		    225, 1, 0, 0, 0, 225, 228, 1, 0, 0, 0, 226, 224, 1, 0, 0, 0, 227, 
		    229, 3, 44, 22, 0, 228, 227, 1, 0, 0, 0, 228, 229, 1, 0, 0, 0, 229, 
		    230, 1, 0, 0, 0, 230, 231, 5, 17, 0, 0, 231, 41, 1, 0, 0, 0, 232, 
		    233, 5, 26, 0, 0, 233, 234, 3, 86, 43, 0, 234, 238, 5, 27, 0, 0, 235, 
		    237, 3, 26, 13, 0, 236, 235, 1, 0, 0, 0, 237, 240, 1, 0, 0, 0, 238, 
		    236, 1, 0, 0, 0, 238, 239, 1, 0, 0, 0, 239, 43, 1, 0, 0, 0, 240, 238, 
		    1, 0, 0, 0, 241, 242, 5, 28, 0, 0, 242, 246, 5, 27, 0, 0, 243, 245, 
		    3, 26, 13, 0, 244, 243, 1, 0, 0, 0, 245, 248, 1, 0, 0, 0, 246, 244, 
		    1, 0, 0, 0, 246, 247, 1, 0, 0, 0, 247, 45, 1, 0, 0, 0, 248, 246, 1, 
		    0, 0, 0, 249, 250, 5, 29, 0, 0, 250, 251, 3, 48, 24, 0, 251, 252, 
		    3, 28, 14, 0, 252, 260, 1, 0, 0, 0, 253, 254, 5, 29, 0, 0, 254, 255, 
		    3, 58, 29, 0, 255, 256, 3, 28, 14, 0, 256, 260, 1, 0, 0, 0, 257, 258, 
		    5, 29, 0, 0, 258, 260, 3, 28, 14, 0, 259, 249, 1, 0, 0, 0, 259, 253, 
		    1, 0, 0, 0, 259, 257, 1, 0, 0, 0, 260, 47, 1, 0, 0, 0, 261, 263, 3, 
		    50, 25, 0, 262, 261, 1, 0, 0, 0, 262, 263, 1, 0, 0, 0, 263, 264, 1, 
		    0, 0, 0, 264, 266, 5, 30, 0, 0, 265, 267, 3, 58, 29, 0, 266, 265, 
		    1, 0, 0, 0, 266, 267, 1, 0, 0, 0, 267, 268, 1, 0, 0, 0, 268, 270, 
		    5, 30, 0, 0, 269, 271, 3, 58, 29, 0, 270, 269, 1, 0, 0, 0, 270, 271, 
		    1, 0, 0, 0, 271, 49, 1, 0, 0, 0, 272, 275, 3, 30, 15, 0, 273, 275, 
		    3, 32, 16, 0, 274, 272, 1, 0, 0, 0, 274, 273, 1, 0, 0, 0, 275, 51, 
		    1, 0, 0, 0, 276, 277, 5, 31, 0, 0, 277, 53, 1, 0, 0, 0, 278, 279, 
		    5, 32, 0, 0, 279, 55, 1, 0, 0, 0, 280, 282, 5, 33, 0, 0, 281, 283, 
		    3, 86, 43, 0, 282, 281, 1, 0, 0, 0, 282, 283, 1, 0, 0, 0, 283, 57, 
		    1, 0, 0, 0, 284, 285, 3, 60, 30, 0, 285, 59, 1, 0, 0, 0, 286, 291, 
		    3, 62, 31, 0, 287, 288, 5, 34, 0, 0, 288, 290, 3, 62, 31, 0, 289, 
		    287, 1, 0, 0, 0, 290, 293, 1, 0, 0, 0, 291, 289, 1, 0, 0, 0, 291, 
		    292, 1, 0, 0, 0, 292, 61, 1, 0, 0, 0, 293, 291, 1, 0, 0, 0, 294, 299, 
		    3, 64, 32, 0, 295, 296, 5, 35, 0, 0, 296, 298, 3, 64, 32, 0, 297, 
		    295, 1, 0, 0, 0, 298, 301, 1, 0, 0, 0, 299, 297, 1, 0, 0, 0, 299, 
		    300, 1, 0, 0, 0, 300, 63, 1, 0, 0, 0, 301, 299, 1, 0, 0, 0, 302, 307, 
		    3, 66, 33, 0, 303, 304, 7, 2, 0, 0, 304, 306, 3, 66, 33, 0, 305, 303, 
		    1, 0, 0, 0, 306, 309, 1, 0, 0, 0, 307, 305, 1, 0, 0, 0, 307, 308, 
		    1, 0, 0, 0, 308, 65, 1, 0, 0, 0, 309, 307, 1, 0, 0, 0, 310, 315, 3, 
		    68, 34, 0, 311, 312, 7, 3, 0, 0, 312, 314, 3, 68, 34, 0, 313, 311, 
		    1, 0, 0, 0, 314, 317, 1, 0, 0, 0, 315, 313, 1, 0, 0, 0, 315, 316, 
		    1, 0, 0, 0, 316, 67, 1, 0, 0, 0, 317, 315, 1, 0, 0, 0, 318, 323, 3, 
		    70, 35, 0, 319, 320, 7, 4, 0, 0, 320, 322, 3, 70, 35, 0, 321, 319, 
		    1, 0, 0, 0, 322, 325, 1, 0, 0, 0, 323, 321, 1, 0, 0, 0, 323, 324, 
		    1, 0, 0, 0, 324, 69, 1, 0, 0, 0, 325, 323, 1, 0, 0, 0, 326, 331, 3, 
		    72, 36, 0, 327, 328, 7, 5, 0, 0, 328, 330, 3, 72, 36, 0, 329, 327, 
		    1, 0, 0, 0, 330, 333, 1, 0, 0, 0, 331, 329, 1, 0, 0, 0, 331, 332, 
		    1, 0, 0, 0, 332, 71, 1, 0, 0, 0, 333, 331, 1, 0, 0, 0, 334, 335, 7, 
		    6, 0, 0, 335, 338, 3, 72, 36, 0, 336, 338, 3, 74, 37, 0, 337, 334, 
		    1, 0, 0, 0, 337, 336, 1, 0, 0, 0, 338, 73, 1, 0, 0, 0, 339, 345, 3, 
		    82, 41, 0, 340, 344, 3, 78, 39, 0, 341, 344, 3, 80, 40, 0, 342, 344, 
		    3, 76, 38, 0, 343, 340, 1, 0, 0, 0, 343, 341, 1, 0, 0, 0, 343, 342, 
		    1, 0, 0, 0, 344, 347, 1, 0, 0, 0, 345, 343, 1, 0, 0, 0, 345, 346, 
		    1, 0, 0, 0, 346, 75, 1, 0, 0, 0, 347, 345, 1, 0, 0, 0, 348, 349, 7, 
		    7, 0, 0, 349, 77, 1, 0, 0, 0, 350, 351, 5, 14, 0, 0, 351, 352, 3, 
		    58, 29, 0, 352, 353, 5, 15, 0, 0, 353, 79, 1, 0, 0, 0, 354, 356, 5, 
		    5, 0, 0, 355, 357, 3, 86, 43, 0, 356, 355, 1, 0, 0, 0, 356, 357, 1, 
		    0, 0, 0, 357, 358, 1, 0, 0, 0, 358, 359, 5, 6, 0, 0, 359, 81, 1, 0, 
		    0, 0, 360, 368, 3, 90, 45, 0, 361, 368, 5, 60, 0, 0, 362, 368, 3, 
		    84, 42, 0, 363, 364, 5, 5, 0, 0, 364, 365, 3, 58, 29, 0, 365, 366, 
		    5, 6, 0, 0, 366, 368, 1, 0, 0, 0, 367, 360, 1, 0, 0, 0, 367, 361, 
		    1, 0, 0, 0, 367, 362, 1, 0, 0, 0, 367, 363, 1, 0, 0, 0, 368, 83, 1, 
		    0, 0, 0, 369, 370, 5, 50, 0, 0, 370, 371, 5, 51, 0, 0, 371, 372, 5, 
		    52, 0, 0, 372, 374, 5, 5, 0, 0, 373, 375, 3, 86, 43, 0, 374, 373, 
		    1, 0, 0, 0, 374, 375, 1, 0, 0, 0, 375, 376, 1, 0, 0, 0, 376, 400, 
		    5, 6, 0, 0, 377, 378, 5, 53, 0, 0, 378, 379, 5, 5, 0, 0, 379, 380, 
		    3, 58, 29, 0, 380, 381, 5, 6, 0, 0, 381, 400, 1, 0, 0, 0, 382, 383, 
		    5, 54, 0, 0, 383, 384, 5, 5, 0, 0, 384, 400, 5, 6, 0, 0, 385, 386, 
		    5, 55, 0, 0, 386, 387, 5, 5, 0, 0, 387, 388, 3, 58, 29, 0, 388, 389, 
		    5, 7, 0, 0, 389, 390, 3, 58, 29, 0, 390, 391, 5, 7, 0, 0, 391, 392, 
		    3, 58, 29, 0, 392, 393, 5, 6, 0, 0, 393, 400, 1, 0, 0, 0, 394, 395, 
		    5, 56, 0, 0, 395, 396, 5, 5, 0, 0, 396, 397, 3, 58, 29, 0, 397, 398, 
		    5, 6, 0, 0, 398, 400, 1, 0, 0, 0, 399, 369, 1, 0, 0, 0, 399, 377, 
		    1, 0, 0, 0, 399, 382, 1, 0, 0, 0, 399, 385, 1, 0, 0, 0, 399, 394, 
		    1, 0, 0, 0, 400, 85, 1, 0, 0, 0, 401, 406, 3, 58, 29, 0, 402, 403, 
		    5, 7, 0, 0, 403, 405, 3, 58, 29, 0, 404, 402, 1, 0, 0, 0, 405, 408, 
		    1, 0, 0, 0, 406, 404, 1, 0, 0, 0, 406, 407, 1, 0, 0, 0, 407, 87, 1, 
		    0, 0, 0, 408, 406, 1, 0, 0, 0, 409, 414, 5, 60, 0, 0, 410, 411, 5, 
		    7, 0, 0, 411, 413, 5, 60, 0, 0, 412, 410, 1, 0, 0, 0, 413, 416, 1, 
		    0, 0, 0, 414, 412, 1, 0, 0, 0, 414, 415, 1, 0, 0, 0, 415, 89, 1, 0, 
		    0, 0, 416, 414, 1, 0, 0, 0, 417, 418, 7, 8, 0, 0, 418, 91, 1, 0, 0, 
		    0, 39, 95, 104, 111, 123, 127, 136, 140, 152, 159, 164, 185, 191, 
		    214, 216, 224, 228, 238, 246, 259, 262, 266, 270, 274, 282, 291, 299, 
		    307, 315, 323, 331, 337, 343, 345, 356, 367, 374, 399, 406, 414];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Golampi.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(95);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ((((($_la - 1)) & ~0x3f) === 0 && ((1 << ($_la - 1)) & -3830690705538915) !== 0)) {
		        	$this->setState(92);
		        	$this->declaration();
		        	$this->setState(97);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(98);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaration(): Context\DeclarationContext
		{
		    $localContext = new Context\DeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_declaration);

		    try {
		        $this->setState(104);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(100);
		        	    $this->varDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(101);
		        	    $this->constDecl();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(102);
		        	    $this->functionDecl();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(103);
		        	    $this->statement();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varDecl(): Context\VarDeclContext
		{
		    $localContext = new Context\VarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_varDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(106);
		        $this->match(self::T__0);
		        $this->setState(107);
		        $this->idList();
		        $this->setState(108);
		        $this->type();
		        $this->setState(111);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__1) {
		        	$this->setState(109);
		        	$this->match(self::T__1);
		        	$this->setState(110);
		        	$this->exprList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constDecl(): Context\ConstDeclContext
		{
		    $localContext = new Context\ConstDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_constDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(113);
		        $this->match(self::T__2);
		        $this->setState(114);
		        $this->match(self::ID);
		        $this->setState(115);
		        $this->type();
		        $this->setState(116);
		        $this->match(self::T__1);
		        $this->setState(117);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionDecl(): Context\FunctionDeclContext
		{
		    $localContext = new Context\FunctionDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_functionDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(119);
		        $this->match(self::T__3);
		        $this->setState(120);
		        $this->match(self::ID);
		        $this->setState(121);
		        $this->match(self::T__4);
		        $this->setState(123);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__7 || $_la === self::ID) {
		        	$this->setState(122);
		        	$this->parameters();
		        }
		        $this->setState(125);
		        $this->match(self::T__5);
		        $this->setState(127);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 32288) !== 0)) {
		        	$this->setState(126);
		        	$this->returnType();
		        }
		        $this->setState(129);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameters(): Context\ParametersContext
		{
		    $localContext = new Context\ParametersContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_parameters);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(131);
		        $this->parameter();
		        $this->setState(136);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__6) {
		        	$this->setState(132);
		        	$this->match(self::T__6);
		        	$this->setState(133);
		        	$this->parameter();
		        	$this->setState(138);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameter(): Context\ParameterContext
		{
		    $localContext = new Context\ParameterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_parameter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(140);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__7) {
		        	$this->setState(139);
		        	$this->pointer();
		        }
		        $this->setState(142);
		        $this->match(self::ID);
		        $this->setState(143);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pointer(): Context\PointerContext
		{
		    $localContext = new Context\PointerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_pointer);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(145);
		        $this->match(self::T__7);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnType(): Context\ReturnTypeContext
		{
		    $localContext = new Context\ReturnTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_returnType);

		    try {
		        $this->setState(152);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__8:
		            case self::T__9:
		            case self::T__10:
		            case self::T__11:
		            case self::T__12:
		            case self::T__13:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(147);
		            	$this->type();
		            	break;

		            case self::T__4:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(148);
		            	$this->match(self::T__4);
		            	$this->setState(149);
		            	$this->typeList();
		            	$this->setState(150);
		            	$this->match(self::T__5);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeList(): Context\TypeListContext
		{
		    $localContext = new Context\TypeListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_typeList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(154);
		        $this->type();
		        $this->setState(159);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__6) {
		        	$this->setState(155);
		        	$this->match(self::T__6);
		        	$this->setState(156);
		        	$this->type();
		        	$this->setState(161);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_type);

		    try {
		        $this->setState(164);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__8:
		            case self::T__9:
		            case self::T__10:
		            case self::T__11:
		            case self::T__12:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(162);
		            	$this->primitiveType();
		            	break;

		            case self::T__13:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(163);
		            	$this->arrayType();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primitiveType(): Context\PrimitiveTypeContext
		{
		    $localContext = new Context\PrimitiveTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_primitiveType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(166);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 15872) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayType(): Context\ArrayTypeContext
		{
		    $localContext = new Context\ArrayTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_arrayType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(168);
		        $this->match(self::T__13);
		        $this->setState(169);
		        $this->expression();
		        $this->setState(170);
		        $this->match(self::T__14);
		        $this->setState(171);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_statement);

		    try {
		        $this->setState(185);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(173);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(174);
		        	    $this->varDecl();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(175);
		        	    $this->constDecl();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(176);
		        	    $this->shortVarDecl();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(177);
		        	    $this->assignment();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(178);
		        	    $this->ifStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(179);
		        	    $this->switchStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(180);
		        	    $this->forStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(181);
		        	    $this->breakStmt();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(182);
		        	    $this->continueStmt();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(183);
		        	    $this->returnStmt();
		        	break;

		        	case 12:
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(184);
		        	    $this->exprStmt();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(187);
		        $this->match(self::T__15);
		        $this->setState(191);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ((((($_la - 1)) & ~0x3f) === 0 && ((1 << ($_la - 1)) & -3830690705538923) !== 0)) {
		        	$this->setState(188);
		        	$this->statement();
		        	$this->setState(193);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(194);
		        $this->match(self::T__16);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function shortVarDecl(): Context\ShortVarDeclContext
		{
		    $localContext = new Context\ShortVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(196);
		        $this->idList();
		        $this->setState(197);
		        $this->match(self::T__17);
		        $this->setState(198);
		        $this->exprList();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(200);
		        $this->expression();
		        $this->setState(201);
		        $this->assignOp();
		        $this->setState(202);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignOp(): Context\AssignOpContext
		{
		    $localContext = new Context\AssignOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_assignOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(204);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 7864324) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprStmt(): Context\ExprStmtContext
		{
		    $localContext = new Context\ExprStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_exprStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(206);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(208);
		        $this->match(self::T__22);
		        $this->setState(209);
		        $this->expression();
		        $this->setState(210);
		        $this->block();
		        $this->setState(216);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__23) {
		        	$this->setState(211);
		        	$this->match(self::T__23);
		        	$this->setState(214);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__22:
		        	    	$this->setState(212);
		        	    	$this->ifStmt();
		        	    	break;

		        	    case self::T__15:
		        	    	$this->setState(213);
		        	    	$this->block();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(218);
		        $this->match(self::T__24);
		        $this->setState(219);
		        $this->expression();
		        $this->setState(220);
		        $this->match(self::T__15);
		        $this->setState(224);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__25) {
		        	$this->setState(221);
		        	$this->caseClause();
		        	$this->setState(226);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(228);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__27) {
		        	$this->setState(227);
		        	$this->defaultClause();
		        }
		        $this->setState(230);
		        $this->match(self::T__16);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function caseClause(): Context\CaseClauseContext
		{
		    $localContext = new Context\CaseClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_caseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(232);
		        $this->match(self::T__25);
		        $this->setState(233);
		        $this->exprList();
		        $this->setState(234);
		        $this->match(self::T__26);
		        $this->setState(238);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ((((($_la - 1)) & ~0x3f) === 0 && ((1 << ($_la - 1)) & -3830690705538923) !== 0)) {
		        	$this->setState(235);
		        	$this->statement();
		        	$this->setState(240);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function defaultClause(): Context\DefaultClauseContext
		{
		    $localContext = new Context\DefaultClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_defaultClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(241);
		        $this->match(self::T__27);
		        $this->setState(242);
		        $this->match(self::T__26);
		        $this->setState(246);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ((((($_la - 1)) & ~0x3f) === 0 && ((1 << ($_la - 1)) & -3830690705538923) !== 0)) {
		        	$this->setState(243);
		        	$this->statement();
		        	$this->setState(248);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStmt(): Context\ForStmtContext
		{
		    $localContext = new Context\ForStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_forStmt);

		    try {
		        $this->setState(259);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 18, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(249);
		        	    $this->match(self::T__28);
		        	    $this->setState(250);
		        	    $this->forClause();
		        	    $this->setState(251);
		        	    $this->block();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(253);
		        	    $this->match(self::T__28);
		        	    $this->setState(254);
		        	    $this->expression();
		        	    $this->setState(255);
		        	    $this->block();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(257);
		        	    $this->match(self::T__28);
		        	    $this->setState(258);
		        	    $this->block();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forClause(): Context\ForClauseContext
		{
		    $localContext = new Context\ForClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_forClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(262);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ((((($_la - 5)) & ~0x3f) === 0 && ((1 << ($_la - 5)) & 1152682085949898761) !== 0)) {
		        	$this->setState(261);
		        	$this->forInit();
		        }
		        $this->setState(264);
		        $this->match(self::T__29);
		        $this->setState(266);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ((((($_la - 5)) & ~0x3f) === 0 && ((1 << ($_la - 5)) & 1152682085949898761) !== 0)) {
		        	$this->setState(265);
		        	$this->expression();
		        }
		        $this->setState(268);
		        $this->match(self::T__29);
		        $this->setState(270);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ((((($_la - 5)) & ~0x3f) === 0 && ((1 << ($_la - 5)) & 1152682085949898761) !== 0)) {
		        	$this->setState(269);
		        	$this->expression();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forInit(): Context\ForInitContext
		{
		    $localContext = new Context\ForInitContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_forInit);

		    try {
		        $this->setState(274);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(272);
		        	    $this->shortVarDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(273);
		        	    $this->assignment();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function breakStmt(): Context\BreakStmtContext
		{
		    $localContext = new Context\BreakStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_breakStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(276);
		        $this->match(self::T__30);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function continueStmt(): Context\ContinueStmtContext
		{
		    $localContext = new Context\ContinueStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_continueStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(278);
		        $this->match(self::T__31);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStmt(): Context\ReturnStmtContext
		{
		    $localContext = new Context\ReturnStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(280);
		        $this->match(self::T__32);
		        $this->setState(282);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
		            case 1:
		        	    $this->setState(281);
		        	    $this->exprList();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
		    $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_expression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(284);
		        $this->logicalOr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalOr(): Context\LogicalOrContext
		{
		    $localContext = new Context\LogicalOrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_logicalOr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(286);
		        $this->logicalAnd();
		        $this->setState(291);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__33) {
		        	$this->setState(287);
		        	$this->match(self::T__33);
		        	$this->setState(288);
		        	$this->logicalAnd();
		        	$this->setState(293);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalAnd(): Context\LogicalAndContext
		{
		    $localContext = new Context\LogicalAndContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_logicalAnd);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(294);
		        $this->equality();
		        $this->setState(299);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__34) {
		        	$this->setState(295);
		        	$this->match(self::T__34);
		        	$this->setState(296);
		        	$this->equality();
		        	$this->setState(301);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function equality(): Context\EqualityContext
		{
		    $localContext = new Context\EqualityContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_equality);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(302);
		        $this->relational();
		        $this->setState(307);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__35 || $_la === self::T__36) {
		        	$this->setState(303);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T__35 || $_la === self::T__36)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(304);
		        	$this->relational();
		        	$this->setState(309);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function relational(): Context\RelationalContext
		{
		    $localContext = new Context\RelationalContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_relational);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(310);
		        $this->additive();
		        $this->setState(315);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4123168604160) !== 0)) {
		        	$this->setState(311);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 4123168604160) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(312);
		        	$this->additive();
		        	$this->setState(317);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function additive(): Context\AdditiveContext
		{
		    $localContext = new Context\AdditiveContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_additive);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(318);
		        $this->multiplicative();
		        $this->setState(323);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(319);

		        		$_la = $this->input->LA(1);

		        		if (!($_la === self::T__41 || $_la === self::T__42)) {
		        		$this->errorHandler->recoverInline($this);
		        		} else {
		        			if ($this->input->LA(1) === Token::EOF) {
		        			    $this->matchedEOF = true;
		        		    }

		        			$this->errorHandler->reportMatch($this);
		        			$this->consume();
		        		}
		        		$this->setState(320);
		        		$this->multiplicative(); 
		        	}

		        	$this->setState(325);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function multiplicative(): Context\MultiplicativeContext
		{
		    $localContext = new Context\MultiplicativeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_multiplicative);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(326);
		        $this->unary();
		        $this->setState(331);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(327);

		        		$_la = $this->input->LA(1);

		        		if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 52776558133504) !== 0))) {
		        		$this->errorHandler->recoverInline($this);
		        		} else {
		        			if ($this->input->LA(1) === Token::EOF) {
		        			    $this->matchedEOF = true;
		        		    }

		        			$this->errorHandler->reportMatch($this);
		        			$this->consume();
		        		}
		        		$this->setState(328);
		        		$this->unary(); 
		        	}

		        	$this->setState(333);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unary(): Context\UnaryContext
		{
		    $localContext = new Context\UnaryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_unary);

		    try {
		        $this->setState(337);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__7:
		            case self::T__42:
		            case self::T__45:
		            case self::T__46:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(334);

		            	$_la = $this->input->LA(1);

		            	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 219902325555456) !== 0))) {
		            	$this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(335);
		            	$this->unary();
		            	break;

		            case self::T__4:
		            case self::T__49:
		            case self::T__52:
		            case self::T__53:
		            case self::T__54:
		            case self::T__55:
		            case self::T__56:
		            case self::T__57:
		            case self::T__58:
		            case self::ID:
		            case self::INT:
		            case self::FLOAT:
		            case self::STRING:
		            case self::RUNE:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(336);
		            	$this->postfix();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function postfix(): Context\PostfixContext
		{
		    $localContext = new Context\PostfixContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_postfix);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(339);
		        $this->primary();
		        $this->setState(345);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(343);
		        		$this->errorHandler->sync($this);

		        		switch ($this->input->LA(1)) {
		        		    case self::T__13:
		        		    	$this->setState(340);
		        		    	$this->index();
		        		    	break;

		        		    case self::T__4:
		        		    	$this->setState(341);
		        		    	$this->call();
		        		    	break;

		        		    case self::T__47:
		        		    case self::T__48:
		        		    	$this->setState(342);
		        		    	$this->incrementOp();
		        		    	break;

		        		default:
		        			throw new NoViableAltException($this);
		        		} 
		        	}

		        	$this->setState(347);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function incrementOp(): Context\IncrementOpContext
		{
		    $localContext = new Context\IncrementOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_incrementOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(348);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__47 || $_la === self::T__48)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function index(): Context\IndexContext
		{
		    $localContext = new Context\IndexContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_index);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(350);
		        $this->match(self::T__13);
		        $this->setState(351);
		        $this->expression();
		        $this->setState(352);
		        $this->match(self::T__14);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function call(): Context\CallContext
		{
		    $localContext = new Context\CallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_call);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(354);
		        $this->match(self::T__4);
		        $this->setState(356);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ((((($_la - 5)) & ~0x3f) === 0 && ((1 << ($_la - 5)) & 1152682085949898761) !== 0)) {
		        	$this->setState(355);
		        	$this->exprList();
		        }
		        $this->setState(358);
		        $this->match(self::T__5);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primary(): Context\PrimaryContext
		{
		    $localContext = new Context\PrimaryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_primary);

		    try {
		        $this->setState(367);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__56:
		            case self::T__57:
		            case self::T__58:
		            case self::INT:
		            case self::FLOAT:
		            case self::STRING:
		            case self::RUNE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(360);
		            	$this->literal();
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(361);
		            	$this->match(self::ID);
		            	break;

		            case self::T__49:
		            case self::T__52:
		            case self::T__53:
		            case self::T__54:
		            case self::T__55:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(362);
		            	$this->builtinCall();
		            	break;

		            case self::T__4:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(363);
		            	$this->match(self::T__4);
		            	$this->setState(364);
		            	$this->expression();
		            	$this->setState(365);
		            	$this->match(self::T__5);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function builtinCall(): Context\BuiltinCallContext
		{
		    $localContext = new Context\BuiltinCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_builtinCall);

		    try {
		        $this->setState(399);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__49:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(369);
		            	$this->match(self::T__49);
		            	$this->setState(370);
		            	$this->match(self::T__50);
		            	$this->setState(371);
		            	$this->match(self::T__51);
		            	$this->setState(372);
		            	$this->match(self::T__4);
		            	$this->setState(374);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ((((($_la - 5)) & ~0x3f) === 0 && ((1 << ($_la - 5)) & 1152682085949898761) !== 0)) {
		            		$this->setState(373);
		            		$this->exprList();
		            	}
		            	$this->setState(376);
		            	$this->match(self::T__5);
		            	break;

		            case self::T__52:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(377);
		            	$this->match(self::T__52);
		            	$this->setState(378);
		            	$this->match(self::T__4);
		            	$this->setState(379);
		            	$this->expression();
		            	$this->setState(380);
		            	$this->match(self::T__5);
		            	break;

		            case self::T__53:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(382);
		            	$this->match(self::T__53);
		            	$this->setState(383);
		            	$this->match(self::T__4);
		            	$this->setState(384);
		            	$this->match(self::T__5);
		            	break;

		            case self::T__54:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(385);
		            	$this->match(self::T__54);
		            	$this->setState(386);
		            	$this->match(self::T__4);
		            	$this->setState(387);
		            	$this->expression();
		            	$this->setState(388);
		            	$this->match(self::T__6);
		            	$this->setState(389);
		            	$this->expression();
		            	$this->setState(390);
		            	$this->match(self::T__6);
		            	$this->setState(391);
		            	$this->expression();
		            	$this->setState(392);
		            	$this->match(self::T__5);
		            	break;

		            case self::T__55:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(394);
		            	$this->match(self::T__55);
		            	$this->setState(395);
		            	$this->match(self::T__4);
		            	$this->setState(396);
		            	$this->expression();
		            	$this->setState(397);
		            	$this->match(self::T__5);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprList(): Context\ExprListContext
		{
		    $localContext = new Context\ExprListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_exprList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(401);
		        $this->expression();
		        $this->setState(406);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__6) {
		        	$this->setState(402);
		        	$this->match(self::T__6);
		        	$this->setState(403);
		        	$this->expression();
		        	$this->setState(408);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function idList(): Context\IdListContext
		{
		    $localContext = new Context\IdListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(409);
		        $this->match(self::ID);
		        $this->setState(414);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__6) {
		        	$this->setState(410);
		        	$this->match(self::T__6);
		        	$this->setState(411);
		        	$this->match(self::ID);
		        	$this->setState(416);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 90, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(417);

		        $_la = $this->input->LA(1);

		        if (!((((($_la - 57)) & ~0x3f) === 0 && ((1 << ($_la - 57)) & 247) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GolampiParser;
	use GolampiVisitor;
	use GolampiListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_program;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EOF, 0);
	    }

	    /**
	     * @return array<DeclarationContext>|DeclarationContext|null
	     */
	    public function declaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(DeclarationContext::class);
	    	}

	        return $this->getTypedRuleContext(DeclarationContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitProgram($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_declaration;
	    }

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function constDecl(): ?ConstDeclContext
	    {
	    	return $this->getTypedRuleContext(ConstDeclContext::class, 0);
	    }

	    public function functionDecl(): ?FunctionDeclContext
	    {
	    	return $this->getTypedRuleContext(FunctionDeclContext::class, 0);
	    }

	    public function statement(): ?StatementContext
	    {
	    	return $this->getTypedRuleContext(StatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_varDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_constDecl;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterConstDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitConstDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitConstDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_functionDecl;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function parameters(): ?ParametersContext
	    {
	    	return $this->getTypedRuleContext(ParametersContext::class, 0);
	    }

	    public function returnType(): ?ReturnTypeContext
	    {
	    	return $this->getTypedRuleContext(ReturnTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFunctionDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFunctionDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFunctionDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParametersContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_parameters;
	    }

	    /**
	     * @return array<ParameterContext>|ParameterContext|null
	     */
	    public function parameter(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParameterContext::class);
	    	}

	        return $this->getTypedRuleContext(ParameterContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParameters($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParameters($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParameters($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParameterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_parameter;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function pointer(): ?PointerContext
	    {
	    	return $this->getTypedRuleContext(PointerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParameter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParameter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParameter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PointerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_pointer;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPointer($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPointer($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPointer($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnType;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function typeList(): ?TypeListContext
	    {
	    	return $this->getTypedRuleContext(TypeListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_typeList;
	    }

	    /**
	     * @return array<TypeContext>|TypeContext|null
	     */
	    public function type(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTypeList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTypeList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTypeList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_type;
	    }

	    public function primitiveType(): ?PrimitiveTypeContext
	    {
	    	return $this->getTypedRuleContext(PrimitiveTypeContext::class, 0);
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrimitiveTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_primitiveType;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPrimitiveType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPrimitiveType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPrimitiveType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayType;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_statement;
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function constDecl(): ?ConstDeclContext
	    {
	    	return $this->getTypedRuleContext(ConstDeclContext::class, 0);
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function switchStmt(): ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

	    public function forStmt(): ?ForStmtContext
	    {
	    	return $this->getTypedRuleContext(ForStmtContext::class, 0);
	    }

	    public function breakStmt(): ?BreakStmtContext
	    {
	    	return $this->getTypedRuleContext(BreakStmtContext::class, 0);
	    }

	    public function continueStmt(): ?ContinueStmtContext
	    {
	    	return $this->getTypedRuleContext(ContinueStmtContext::class, 0);
	    }

	    public function returnStmt(): ?ReturnStmtContext
	    {
	    	return $this->getTypedRuleContext(ReturnStmtContext::class, 0);
	    }

	    public function exprStmt(): ?ExprStmtContext
	    {
	    	return $this->getTypedRuleContext(ExprStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_block;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBlock($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBlock($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ShortVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_shortVarDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterShortVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitShortVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitShortVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignment;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function assignOp(): ?AssignOpContext
	    {
	    	return $this->getTypedRuleContext(AssignOpContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignOp;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignOp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_exprStmt;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExprStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExprStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExprStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_ifStmt;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<BlockContext>|BlockContext|null
	     */
	    public function block(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BlockContext::class);
	    	}

	        return $this->getTypedRuleContext(BlockContext::class, $index);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIfStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIfStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIfStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_switchStmt;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<CaseClauseContext>|CaseClauseContext|null
	     */
	    public function caseClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CaseClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(CaseClauseContext::class, $index);
	    }

	    public function defaultClause(): ?DefaultClauseContext
	    {
	    	return $this->getTypedRuleContext(DefaultClauseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CaseClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_caseClause;
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterCaseClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitCaseClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCaseClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DefaultClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_defaultClause;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDefaultClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDefaultClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDefaultClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forStmt;
	    }

	    public function forClause(): ?ForClauseContext
	    {
	    	return $this->getTypedRuleContext(ForClauseContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forClause;
	    }

	    public function forInit(): ?ForInitContext
	    {
	    	return $this->getTypedRuleContext(ForInitContext::class, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForInitContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forInit;
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForInit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForInit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForInit($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BreakStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_breakStmt;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBreakStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBreakStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBreakStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ContinueStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_continueStmt;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterContinueStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitContinueStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitContinueStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnStmt;
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expression;
	    }

	    public function logicalOr(): ?LogicalOrContext
	    {
	    	return $this->getTypedRuleContext(LogicalOrContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogicalOrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_logicalOr;
	    }

	    /**
	     * @return array<LogicalAndContext>|LogicalAndContext|null
	     */
	    public function logicalAnd(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogicalAndContext::class);
	    	}

	        return $this->getTypedRuleContext(LogicalAndContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLogicalOr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalOr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalOr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogicalAndContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_logicalAnd;
	    }

	    /**
	     * @return array<EqualityContext>|EqualityContext|null
	     */
	    public function equality(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EqualityContext::class);
	    	}

	        return $this->getTypedRuleContext(EqualityContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLogicalAnd($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalAnd($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalAnd($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EqualityContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_equality;
	    }

	    /**
	     * @return array<RelationalContext>|RelationalContext|null
	     */
	    public function relational(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(RelationalContext::class);
	    	}

	        return $this->getTypedRuleContext(RelationalContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterEquality($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitEquality($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitEquality($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RelationalContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_relational;
	    }

	    /**
	     * @return array<AdditiveContext>|AdditiveContext|null
	     */
	    public function additive(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AdditiveContext::class);
	    	}

	        return $this->getTypedRuleContext(AdditiveContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterRelational($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitRelational($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRelational($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AdditiveContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_additive;
	    }

	    /**
	     * @return array<MultiplicativeContext>|MultiplicativeContext|null
	     */
	    public function multiplicative(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MultiplicativeContext::class);
	    	}

	        return $this->getTypedRuleContext(MultiplicativeContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAdditive($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAdditive($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAdditive($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MultiplicativeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_multiplicative;
	    }

	    /**
	     * @return array<UnaryContext>|UnaryContext|null
	     */
	    public function unary(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UnaryContext::class);
	    	}

	        return $this->getTypedRuleContext(UnaryContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterMultiplicative($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitMultiplicative($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitMultiplicative($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_unary;
	    }

	    public function unary(): ?UnaryContext
	    {
	    	return $this->getTypedRuleContext(UnaryContext::class, 0);
	    }

	    public function postfix(): ?PostfixContext
	    {
	    	return $this->getTypedRuleContext(PostfixContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterUnary($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitUnary($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitUnary($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PostfixContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_postfix;
	    }

	    public function primary(): ?PrimaryContext
	    {
	    	return $this->getTypedRuleContext(PrimaryContext::class, 0);
	    }

	    /**
	     * @return array<IndexContext>|IndexContext|null
	     */
	    public function index(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IndexContext::class);
	    	}

	        return $this->getTypedRuleContext(IndexContext::class, $index);
	    }

	    /**
	     * @return array<CallContext>|CallContext|null
	     */
	    public function call(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CallContext::class);
	    	}

	        return $this->getTypedRuleContext(CallContext::class, $index);
	    }

	    /**
	     * @return array<IncrementOpContext>|IncrementOpContext|null
	     */
	    public function incrementOp(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IncrementOpContext::class);
	    	}

	        return $this->getTypedRuleContext(IncrementOpContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPostfix($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPostfix($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPostfix($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncrementOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_incrementOp;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIncrementOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIncrementOp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIncrementOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IndexContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_index;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIndex($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIndex($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIndex($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_call;
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitCall($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCall($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrimaryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_primary;
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function builtinCall(): ?BuiltinCallContext
	    {
	    	return $this->getTypedRuleContext(BuiltinCallContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPrimary($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPrimary($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPrimary($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BuiltinCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_builtinCall;
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBuiltinCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBuiltinCall($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBuiltinCall($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_exprList;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExprList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExprList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExprList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_idList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::ID);
	    	}

	        return $this->getToken(GolampiParser::ID, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIdList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIdList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_literal;
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT, 0);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT, 0);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING, 0);
	    }

	    public function RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}