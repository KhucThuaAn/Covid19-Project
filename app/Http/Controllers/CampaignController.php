<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Ticket;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::all(); 
        return view('campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Bạn cần nhập tên chiến dịch',
            'date.required' => 'Bạn phải nhập thời gian'
        ];

        $this->validate($request,[
            'name'=>'required',
            'date'=>'required'
        ], $messages);
        
        // $errors = $validate->errors();

        $save = Campaign::create($request->only('name','slug','date'));

        if($save) {
            return redirect()->route('campaign.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        $tickets = Ticket::all();
        
        return view('campaigns.detail', compact('campaign','tickets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        return view('campaigns.edit',compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        $update = $campaign->update($request->only('name','slug','date'));
        if($update) {
            return redirect()->route('campaign.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        //
    }

    
}
