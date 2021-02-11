<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index(){

        $car = Car::all(); 
        dd($car);
        return view('home');
    }
}
