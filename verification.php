<?php

$tests = [
    'square' => [
        'matrix' => [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ],
        'transposed' => [
            [1, 4, 7],
            [2, 5, 8],
            [3, 6, 9]
        ]
    ],
    'wide' => [
        'matrix' => [
            [1, 2, 3, 4],
            [5, 6, 7, 8]
        ],
        'transposed' => [
            [1, 5],
            [2, 6],
            [3, 7],
            [4, 8]
        ]
    ],
    'tall' => [
        'matrix' => [
            [1, 2],
            [3, 4],
            [5, 6],
            [7, 8]
        ],
        'transposed' => [
            [1, 3, 5, 7],
            [2, 4, 6, 8]
        ]
    ]
];

function testTransposer($transpose) {
    global $tests;
    foreach ($tests as $matrixType => $test) {
        $result = $transpose($test['matrix']) == $test['transposed'] ? "Pass" : "Fail";
        printf("Testing transpose function on a %s matrix:\t%s\n", $matrixType, $result);
    }
}
