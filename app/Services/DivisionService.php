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

        if($this->valueTwoZero() && $this->isNumberic() ){
            return $this->value1 / $this->value2;
        }else{
            return "2nd Value Cannot Be Zero or Number Should be Numeric";
        }


    }

    private function valueTwoZero(){
        if($this->value2==0){
            return 0;
        }else{
            return 1;
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
