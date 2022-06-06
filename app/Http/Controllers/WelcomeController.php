<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){

        $datas = guru::all();
        return view('/welcome');
    }
}
