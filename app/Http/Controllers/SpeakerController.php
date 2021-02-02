<?php

namespace App\Http\Controllers;



use App\Speaker;
// use App\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;


class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speaker = Speaker::orderBy('updated_at', 'asc')->get();
        // $program = Program::orderBy('updated_at', 'asc')->get();
        $program = DB::select('select * from programs');
        $testimony = DB::select('select * from testimonies');


        return view('speakers.speakers')->with('speakers', $speaker)->with('programs', $program)->with('testimonies', $testimony);
        // return view('speakers.speakers', compact('programs',  $program));
        // // return view('speakers.speakers_programs');
        
        // $program = DB::table('speakers')->where('speaker_name',  $speaker_name)->first();
        

        // dd($speaker_name);
        
        
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
        
        $this->validate($request, [
            'program_user' => 'required',
            'program_description' => 'required',
            'program_time'=>'required',
           
        ]);
        //

        $program = New Speaker([
            'program_user' => $request->get('program_user'),
            'program_description' => $request->get('program_description'),
            'program_time'=> $request->get('program_time')
        ]); 
        $program->save();
        
        
    }

    public function program()
    {
        $program = DB::select('select * from programs');
        // return $program;
        return view('speakers.speakers_programs')->with('programs', $program);

        // $program =  DB::table('programs')->get();


        // return view(dd($programs)->with('programs', $programs   ));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $speaker  = Speaker::find($id);
        // return view('speakers')->with('speaker', $speaker);
       
        
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
