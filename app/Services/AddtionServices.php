<?php

namespace App\Services;

class AddtionServices
{

    protected $value1;
    protected $value2;

    public function __construct($val1,$val2)
    {
        $this->value1 = $val1;
        $this->value2 = $val2;
    }


    public function calculate(){

        if($this->isNumberic()){
            return $this->value1 + $this->value2;
        }else{
            return "Should be Numeric Value";
        }


    }

    public function isNumberic(){
        if(!is_numeric( $this->value1) || !is_numeric($this->value2)){
            return 0;
        }else{
            return 1;
        }
    }

}
