<?php

namespace App\Http\Controllers;

use App\Services\AddtionServices;
use App\Services\DivisionService;
use App\Services\MultiplicationService;
use App\Services\SquareService;
use App\Services\SubstractionServices;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){


    }

    public function submit(Request $request){



        $num1 = $request->value1;
        $num2 = $request->value2;



        switch ($request->operation){
            case '+':
                $value = new AddtionServices($num1,$num2);
                $result = $value->calculate();
                break;
            case '-':
                $value = new SubstractionServices($num1,$num2);
                $result = $value->calculate();
                break;
            case '*':
                $value = new MultiplicationService($num1,$num2);
                $result = $value->calculate();
                break;
            case '/':
                $value = new DivisionService($num1,$num2);
                $result = $value->calculate();
                break;
            case 'sqrt':
                $value = new SquareService($num1);
                $result = $value->calculate();
                break;
        }

        return redirect('/')->with('result',$result);
    }


}
