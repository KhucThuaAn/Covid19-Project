<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Ticket;
use App\Models\SessionRegistration;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $registrations = SessionRegistration::all()->count();
        $campaigns = Campaign::where('organizer_id', auth()->user()->id)->get(); 
        return view('campaigns.index', compact('campaigns','registrations'));
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
            'slug.unique' => 'Slug đã bị trùng, bạn cần nhập tên chiến dịch khác',
            'date.required' => 'Bạn phải nhập thời gian'
        ];

        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required|unique:campaigns,slug',
            'date'=>'required'
        ], $messages);
        
        // $errors = $validate->errors();
        $request['organizer_id'] = auth()->user()->id;
        // dd($request->all());
        $save = Campaign::create($request->only('name','slug','date','organizer_id'));

        if($save) {
            return redirect()->route('campaign.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $campaign = Campaign::where('slug', $slug)->first();
        return view('campaigns.detail', compact('campaign'));
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
