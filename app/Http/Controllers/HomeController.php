<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        $trains = Train::all();

        return view('home',compact('trains'));
    }
}
