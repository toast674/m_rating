<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    private $name;
    private $rate;
    private $kaisu;

    public function __construct($name){
        $this->name = $name;
        $this->rate = 1500;
    }

    private function getMyRate(){
        return $myrate;
    }

    private function ratingCalc($kaisu){
        $hc = $this->getHc($table_ave_rate, $my_rate);
        $hendou_rate = $kaisu * ($score + $hc);
        return $hendou_rate;
    }

    private function getHc($table_ave_rate, $my_rate){
        $hc = ($table_ave_rate - $my_rate) / 40;
        return $hc;
    }
}
