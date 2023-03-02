<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function index(){
        echo 'hello';
    }

    public function world_message(){
        echo "world";
    }

    public function welcome(){
        return view('welcome');
    }
}
