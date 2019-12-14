<?php

return [
    'array_indentation' => true,
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'line_ending' => true,
    'trailing_comma_in_multiline_array' => [
        'after_heredoc' => true,
    ],
    'visibility_required' => [
        'elements' => [
            'const',
            'property',
            'method',
        ],
    ],
    'yoda_style' => [
        'always_move_variable' => false,
        'equal' => false,
        'identical' => false,
        'less_and_greater' => null,
    ],
];
