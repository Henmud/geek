<?php

namespace App\Http\Controllers;
use App/Basket;
use Illuminate\Http\Request;

class BacketController extends Controller
{
    public function show()
    {
       return Basket::all();
    }
}
