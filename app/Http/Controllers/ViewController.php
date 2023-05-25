<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function report() {
        return view('reports.index');
    }

    public function login() {
        return view('login');
    }
}
