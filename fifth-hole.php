<?php
include 'verification.php';

testTransposer(function ($matrix) {
    return array_reduce(array_keys($matrix[0]), function ($transposed, $column) use ($matrix) {
        $transposed[] = array_column($matrix, $column);
        return $transposed;
    }, []);
});
