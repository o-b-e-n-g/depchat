<?php

namespace App\Http\Controllers;

use App\Channels;

use App\Members;

use App\Courses;

use Session;

use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    

        $channels = Channels::latest()->get();

        return $channels;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('channels.create');
    }


    public function views($id)
    {
       
        $members = Members::where('level', $id)->get();
       $courses = Courses::where('level', $id)->get();

     return view('channels.create', compact('members', 'courses'));

            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $this->validate(request(), [
            'member_id' => 'required',
            'course_id' => 'required'

        ]);

        
        Channels::create([
         'member_id' => request ('member_id'),
         'course_id' => request ('course_id'),  
        

         ]);


    /*  
*/

        //save it to the database

          // $post->save();

        //and then redirect to whereever

          return back();

    }


    public function view() 
    {
        $members = Members::all();
       $courses = Courses::all();

     return view('channels.view', compact('members', 'courses'));


    }

    public function work()
     {
        
    

        $channels = Channels::latest()->get();

        return $channels;


    }


  

    /**
     * Display the specified resource.
     *
     * @param  \App\Channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function show($channels)
    {
        //
    

    }

    public function course($code)
    {
        $channel = Channels::where('course_id', $code)->get();

        return $channel;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function edit(Channels $channels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Channels $channels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function destroy($channels)
    {
        //
        $channel = Channels::where('course_id', $channels);


        $channel->delete();

        Session::flash('message', 'Schedule was successfully deleted');

            return back();
    }
}
