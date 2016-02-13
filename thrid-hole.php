<?php
include 'verification.php';

testTransposer(
    function ($matrix) {
        $transposed = [];
        for ($column = 0; $column < count($matrix[0]); $column++) {
            $transposed[$column] = [];
            for ($row = 0; $row < count($matrix); $row++) {
                $transposed[$column][] = $matrix[$row][$column];
            }
        }

        return $transposed;
    }
);
