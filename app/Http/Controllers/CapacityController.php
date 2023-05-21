<?php

namespace App\Http\Controllers;
use App\Models\Campaign;

use Illuminate\Http\Request;

class CapacityController extends Controller
{
    public function index($slug) {
        $campaign = Campaign::where('slug', $slug)->first();
        return view('reports.index', compact('campaign'));
    }
}
