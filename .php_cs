<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$excludes = [
    'vendor',
    'bootstrap',
    'storage',
    'node_modules',
];

$finder = Finder::create()
    ->in(__DIR__)
    ->exclude($excludes)
    ->name('*.php')
    ->notName('*.blade.php')
    ->notName('_ide_helper.php')
    ->notName('README.md')
    ->notName('*.xml')
    ->notName('*.yml')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Config::create()
    ->setFinder($finder)
    ->setUsingCache(false)
    ->setRules([
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => [
            'operators' => ['=' => null],
        ],
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => true,
        'braces' => ['allow_single_line_closure' => true],
        'concat_space' => ['spacing' => 'one'],
        'function_typehint_space' => true,
        'lowercase_constants' => true,
        'lowercase_cast' => true,
        'lowercase_static_reference' => true,
        'native_function_casing' => true,
        'no_extra_blank_lines' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_spaces_around_offset' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_whitespace_in_blank_line' => true,
        'not_operator_with_successor_space' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => true,
        'short_scalar_cast' => true,
        'single_blank_line_before_namespace' => true,
        'single_quote' => true,
        'space_after_semicolon' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline_array' => true,
        'whitespace_after_comma_in_array' => true,
    ]);
