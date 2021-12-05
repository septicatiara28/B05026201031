<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showPraktikum2()
    {
        return view('prak2web');
    }
    function showETS()
    {
        return view('ets');
    }
    function showTugasPHP()
    {
        return view('fibonacci1');
    }
    function showHasilfibonacci(Request $request)
    {
        return view('fibonacci2');
    }
}


