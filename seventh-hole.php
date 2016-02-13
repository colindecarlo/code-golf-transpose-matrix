<?php
include 'verification.php';

class Matrix
{
    private $matrix;

    public function __construct($matrix) {
        $this->matrix = $matrix;
    }

    public function toArray()
    {
        return $this->matrix;
    }

    public function transpose()
    {
        $this->matrix = array_map(function ($column) {
            return array_column($this->matrix, $column);
        }, array_keys($this->matrix[0]));

        return $this;
    }
}

testTransposer(function ($matrix) {
    return (new Matrix($matrix))->transpose()->toArray();
});
