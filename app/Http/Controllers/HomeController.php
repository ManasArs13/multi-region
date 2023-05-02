<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        if ($request->session()->has('city')) {
            return view('home', ['city' => $request->session()->get('city')]);
        }
        return view('home', ['city' => 'не выбран']);
    }

    public function city(Request $request, $city)
    {
        if ($city == 'msk' || $city == 'kzn' || $city == 'stv' || $city == 'smr') {

            $request->session()->put('city', $city);
          
            return view('home', ['city' => $city]);

        } else {

            return redirect()->route('home');

        }
    }
}
