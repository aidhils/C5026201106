<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showPraktikum2()
    {
        return view('prakdua');
    }

    function showets(){
        return view('ets');
    }

    function showphp(){
        return view('formphp');
    }

    function fhr(Request $request){
        return view('showfhr');
    }

    function showdice(){
        return view('diceresult');
    }
    function fibonacci(Request $request){
        return view('fiboresult');
    }

    function showtri(Request $request){
        return view('triresult');
    }

    function showrev(){
        return view('tugasphpreverse');
    }


    function hasilrev(Request $request){
        return view('celcius');
    }


}

