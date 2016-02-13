<?php
include 'verification.php';

testTransposer(function ($matrix) {
    return array_map(function ($column) use ($matrix) {
        return array_column($matrix, $column);
    }, array_keys($matrix[0]));
});
