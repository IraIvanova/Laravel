<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DefaultController extends Controller
{
    public function index(){
        return view('layouts.main');
    }
}
