<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Campaign;
use Illuminate\Http\Request;

class AreaController extends Controller
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
        return view('areas.create', compact('campaign'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Bạn cần nhập tên chiến dịch',
        ];

        $this->validate($request,[
            'name'=>'required',
        ], $messages);
        $save = Area::create($request->only('name','campaign_id'));
        if($save) {
            return redirect()->route('campaign.show', $request->campaign_id);
        } else {
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aria $area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        //
    }
}
