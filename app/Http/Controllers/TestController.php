<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Fargona()
    {
        return view('Fargona');
    }


    public function andijon()
    {
        return view('andijon');
    }

    public function toshken()
    {
        return view('toshken');
    }

    public function buhoro()
    {
        return view('buhoro');
    }
      public function taxi(Request $request){ 
       $nomi = $request ->Pochtani;
        $narxi = $request ->narhi;
        $rasmi = $request ->rasmi;
        $hajmi = $request ->hajmi;
       
        return view('Andijon', compact('nomi', 'narxi', 'rasmi', 'hajmi'));
    }
}
