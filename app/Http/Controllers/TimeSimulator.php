<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeSimulator extends Controller
{
    //
    public function getIndex(){
        return view('time.form');
    }

    public function result(Request $request){
        $before = $request->input('before');
        $after = $request->input('after');

        $day = ($before + $after);
       
        //１ヶ月の無駄時間
        $month = ($before + $after) * 20;
    
        //1年の無駄時間
        $year = ($before + $after) * 20 * 12;
    
        return view('time.result')->with([
            "day" => "$day",
            "month" => "$month",
            "year" => "$year"
         ]);
        
    }
}

