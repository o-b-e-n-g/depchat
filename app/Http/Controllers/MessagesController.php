<?php

namespace App\Http\Controllers;

use App\Messages;

use App\Members;

use App\Courses;

use Illuminate\Http\Request;

use Illuminate\Auth\Middleware\Authenticate;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        //
        $messages = Messages::all();

        return view ('messages.index', compact('messages'));

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

    public function view()
    {
        //

    }


    public function messageCourse()
    {

        $members = Members::all();
        $courses = Courses::all();

        return view('messages.create', compact('members', 'courses'));


    }

    public function messageLevels() 
    {

        $members = Members::all();
        $courses = Courses::all();

        return view('messages.levels', compact('members', 'courses'));


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
            'recipient_id' => 'required',
            'message' => 'required'

        ]);


        Messages::create([
            'sender_id'=> auth()->id(),
            'recipient_id' => request ('recipient_id'),
            'message' => request ('message')


        ]);
    }

    public function save(Request $request)
    {
        //

        $this->validate(request(), [
            'recipient_id' => 'required',
            'message' => 'required'

        ]);

        $recipient_id = request ('recipient_id');

        $members = Members::where('level', $recipient_id)->get();

        foreach ($members as $member) {

            Messages::create([
                'sender_id'=> auth()->id(),
                'recipient_id' => $member->id,
                'message' => request ('message')


            ]);

        }

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
