<?php

namespace App\Services;

class SquareService
{


    protected $value1;
    public function __construct($val1)
    {
        $this->value1 = $val1;

    }

    public function calculate(){

        if($this->isNegative()){

            return sqrt($this->value1);
        }else{
            return "Square Must Have A Positive Value";
        }


    }

    private function isNegative(){

        if($this->value1<0){
            return 0;
        }else{
            return 1;
        }
    }

}
