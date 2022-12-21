<?php

namespace App\Services;

class DivisionService
{
    protected $value1;
    protected $value2;
    public function __construct($val1,$val2)
    {
        $this->value1 = $val1;
        $this->value2 = $val2;

    }

    public function calculate(){

        if($this->valueTwoZero()){
            return $this->value1 / $this->value2;
        }else{
            return "2nd Value Cannot Be Zero";
        }


    }

    private function valueTwoZero(){
        if($this->value2==0){
            return 0;
        }else{
            return 1;
        }
    }

}
