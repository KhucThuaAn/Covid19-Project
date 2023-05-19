<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Campaign;
use Illuminate\Http\Request;

class TicketController extends Controller
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
        return view('tickets.create', compact('campaign'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $messages = [
            'name.required' => 'Bạn cần nhập tên vé',
        ];

        $this->validate($request,[
            'name'=>'required',
        ], $messages);

        $save = Ticket::create($request->only('name','cost','validity','amount','until','campaign_id'));

        if($save) {
            $campaign = Campaign::find($request->campaign_id);
            return redirect()->route('campaign.show',$campaign);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
