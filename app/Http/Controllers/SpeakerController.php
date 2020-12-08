<?php

namespace App\Http\Controllers;

use App\speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'speaker_name' => 'required',
            'speaker_image' => 'required',
            'speaker_description'=>'required',
           
        ]);
        //

        $speaker = New Speaker([
            'speaker_name' => $request->get('speaker_name'),
            'speaker_image' => $request->get('speaker_image'),
            'speaker_description'=> $request->get('speaker_description'),
        
            'job_title'=>$request->get('job_title'), 
            'facebook_link' => $request->get('facebook_link'), 
            'twitter_link' => $request->get('twitter_link'),            
            'github_link' => $request->get('github_link')
        ]); 
        $speaker->save();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function show(speaker $speaker)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function edit(speaker $speaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, speaker $speaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(speaker $speaker)
    {
        //
    }
}
