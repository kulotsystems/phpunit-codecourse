<?php

namespace App\Calculator;
use App\Calculator\Exceptions\NoOperandsException;

class Addition implements OperationInterface
{
    protected $operands = [];

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

    public function calculate()
    {
        if(count($this->operands) === 0) {
            throw new NoOperandsException;
        }

        return array_sum($this->operands);
    }
}