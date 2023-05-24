<?php

namespace App\Http\Controllers;
use App\Models\Campaign;

use Illuminate\Http\Request;

class CapacityController extends Controller
{
    public function index($slug) {
        $campaign = Campaign::where('slug', $slug)->first();

        $chartData = [];
        foreach ($campaign->areas as $area) {
            foreach ($area->places as $place) {
                foreach ($place->sessions as $session) {
                    $chartData[] = [
                        'session_name' => $session->name,
                        'capacity' => $session->place->capacity,
                        'registered' => $session->registered_users_count,
                    ];
                }
            }
        }

        $chartData[] = [
            'session_name' => $session->name,
            'capacity' => $session->location->capacity,
            'registered' => $session->registered_users_count,
        ];
        return view('reports.index', compact('campaign','chartData'));
    }
}
