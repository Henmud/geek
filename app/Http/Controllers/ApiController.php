<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function indexAction(Request $requset)
    {
        return view('index');
    }
    
    public function allAction(Request $requset)
    {
        return view('all');
    }
}
