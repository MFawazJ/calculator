<?php

namespace Tests\Unit;

use App\Services\AddtionServices;
use App\Services\DivisionService;
use App\Services\MultiplicationService;
use App\Services\SquareService;
use App\Services\SubstractionServices;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_addition_total()
    {
        $sum = new AddtionServices (5, 2);
        $total = $sum->calculate();
        $this->assertEquals(7,$total);
    }

    public function test_substraction_total(){
        $sub = new SubstractionServices(7,0);
        $total = $sub->calculate();
        $this->assertEquals(7,$total);
    }

    public function test_multiplication_total(){
        $multi = new MultiplicationService(7,-2);
        $total = $multi->calculate();
        $this->assertEquals(-14,$total);
    }

    public function test_division_2_value_is_zero(){
        $division = new DivisionService(7,0);
        $total = $division->calculate();
        $this->assertEquals('2nd Value Cannot Be Zero or Number Should be Numeric',$total);
    }

    public function test_division_total(){
        $division = new DivisionService(8,2);
        $total = $division->calculate();
        $this->assertEquals(4,$total);
    }

    public function test_square_total(){
        $division = new SquareService(9);
        $total = $division->calculate();
        $this->assertEquals(3,$total);
    }

    public function test_square_with_negative_value(){
        $division = new SquareService(-9);
        $total = $division->calculate();
        $this->assertEquals("Square Must Have A Positive Value",$total);
    }

    public function test_square_with_letters(){
        $division = new SquareService('sdsadsad');
        $total = $division->calculate();
        $this->assertEquals("Square Must Have A Positive Value",$total);
    }

    public function test_division_total_with_value(){
        $division = new DivisionService('ssfdsf',2);
        $total = $division->calculate();
        $this->assertEquals('2nd Value Cannot Be Zero or Number Should be Numeric',$total);
    }

    public function test_division_total_with_2nd_value(){
        $division = new DivisionService(2,'asdsad');
        $total = $division->calculate();
        $this->assertEquals('2nd Value Cannot Be Zero or Number Should be Numeric',$total);
    }



}
