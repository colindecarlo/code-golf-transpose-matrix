<?php
include 'verification.php';

testTransposer(
    function ($matrix) {
        $transposed = [];
        $numberOfColumns = count($matrix[0]);
        $numberOfRows = count($matrix);
        for ($column = 0; $column < $numberOfColumns; $column++) {
            for ($row = 0; $row < $numberOfRows; $row++) {
                if (! isset($transposed[$column])) {
                    $transposed[$column] = [];
                }
                $transposed[$column][] = $matrix[$row][$column];
            }
        }

        return $transposed;
    }
);
