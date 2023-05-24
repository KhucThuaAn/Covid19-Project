<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Campaign;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Campaign $campaign)
    {
        return view('places.create', compact('campaign'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Bạn cần nhập tên địa điểm',
            'capacity.required' => 'Bạn cần nhập sức chứa địa điểm',
        ];

        $this->validate($request,[
            'name'=>'required',
            'capacity'=>'required'
        ], $messages);
        $save = Place::create($request->only('name','area_id','capacity'));
        if($save) {
            return redirect()->route('campaign.show', $request->campaign_slug);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
