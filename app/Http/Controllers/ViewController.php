<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function login() {
        return view('login');
    }

    public function create_areas() {
        return view('areas.create');
    }

    public function create_place() {
        return view('places.create');
    }

    public function report() {
        return view('reports.index');
    }


    
}
