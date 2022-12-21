<?php

namespace App\Services;

class MultiplicationService
{
    protected $value1;
    protected $value2;
    public function __construct($val1,$val2)
    {
        $this->value1 = $val1;
        $this->value2 = $val2;

    }

    public function calculate(){
        return $this->value1 * $this->value2;
    }

}
