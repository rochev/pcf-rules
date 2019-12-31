<?php

return [
    'combine_nested_dirname' => true,
    'comment_to_phpdoc'      => [
        'ignored_tags' => [],
    ],
    'date_time_immutable'                    => true,
    'declare_strict_types'                   => false,
    'dir_constant'                           => true,
    'ereg_to_preg'                           => true,
    'error_suppression'                      => false,
    'final_class'                            => false,
    'final_internal_class'                   => false,
    'final_public_method_for_abstract_class' => false,
    'fopen_flag_order'                       => true,
    'fopen_flags'                            => [
        'b_mode' => true,
    ],
    'function_to_constant' => [
        'functions' => [
            'get_called_class',
            'get_class',
            'php_sapi_name',
            'phpversion',
            'pi',
        ],
    ],
    'implode_call' => true,
    'is_null'      => [
        'use_yoda_style' => false,
    ],
    'logical_operators'          => true,
    'mb_str_functions'           => true,
    'modernize_types_casting'    => true,
    'native_constant_invocation' => true,
    'native_function_invocation' => [
        'exclude' => [],
        'include' => [
            '@internal',
            '@all',
            '@compiler_optimized',
        ],
        'scope' => 'all',
    ],
    'no_alias_functions' => [
        'sets' => [
            '@internal',
            '@IMAP',
            '@mbreg',
            '@all',
        ],
    ],
    'no_homoglyph_names'                    => true,
    'no_php4_constructor'                   => true,
    'no_unreachable_default_argument_value' => false,
    'no_unset_on_property'                  => true,
    'non_printable_character'               => [
        'use_escape_sequences_in_strings' => true,
    ],
    'ordered_interfaces'                     => false,
    'php_unit_construct'                     => null,
    'php_unit_dedicate_assert'               => null,
    'php_unit_dedicate_assert_internal_type' => null,
    'php_unit_expectation'                   => null,
    'php_unit_mock'                          => null,
    'php_unit_mock_short_will_return'        => null,
    'php_unit_namespaced'                    => null,
    'php_unit_no_expectation_annotation'     => null,
    'php_unit_set_up_tear_down_visibility'   => null,
    'php_unit_strict'                        => null,
    'php_unit_test_annotation'               => null,
    'php_unit_test_case_static_method_calls' => null,
    'phpdoc_to_param_type'                   => false,
    'phpdoc_to_return_type'                  => true,
    'pow_to_exponentiation'                  => true,
    'psr0'                                   => false,
    'psr4'                                   => false,
    'random_api_migration'                   => true,
    'self_accessor'                          => false,
    'set_type_to_cast'                       => true,
    'static_lambda'                          => true,
    'strict_comparison'                      => false,
    'strict_param'                           => true,
    'string_line_ending'                     => true,
    'void_return'                            => true,
];
