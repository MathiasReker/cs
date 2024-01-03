<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(false);

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP80Migration:risky' => true,
        '@PHP82Migration' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'array_indentation' => true,
        'general_phpdoc_annotation_remove' => [
            'annotations' => [
                'expectedDeprecation'
            ]
        ],
        'use_arrow_functions' => true,
        'control_structure_braces' => true,
        'control_structure_continuation_position' => true,
        'self_static_accessor' => true,
        'ordered_interfaces' => true,
        'phpdoc_var_annotation_correct_order' => true,
        'return_assignment' => true,
        'no_useless_else' => true,
        'no_superfluous_elseif' => true,
        'no_useless_return' => true,
        'multiline_comment_opening_closing' => true,
        'no_null_property_initialization' => true,
        'operator_linebreak' => true,
        'method_chaining_indentation' => true,
        'strict_param' => true,
        'strict_comparison' => true,
    ])
    ->setFinder($finder)
    ->setLineEnding(PHP_EOL);

return $config;
