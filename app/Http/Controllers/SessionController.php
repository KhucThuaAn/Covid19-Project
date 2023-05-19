<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Campaign;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Campaign $campaign)
    {
        return view('sessions.create', compact('campaign'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'title.required' => 'Bạn cần nhập tiêu đề',
            'vaccinator.required' => 'Bạn cần nhập tên người tham gia',
            'description.required' => 'Bạn cần nhập mô tả',
        ];

        $this->validate($request,[
            'title'=>'required',
            'vaccinator'=>'required',
            'description'=>'required'
        ], $messages);
        $save = Session::create($request->only('title','place_id','cost','vaccinator','description','start','end','type'));
        if($save) {
            return redirect()->route('campaign.show', $request->campaign_id);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Session $session)
    {
        return view('sessions.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Session $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Session $session)
    {
        //
    }
}
