<?php

namespace App\Http\Controllers;

use App\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Members::orderBy('status', 'ASC')->get();

        return view ('members.index', compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('members.create');
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
            'id' => 'required',
            'name' => 'required',
            'level' => 'required',
            'status' => 'required'
        ]);

        
        Members::create([

           'id' => request ('id'),
           'name' => request ('name'),
           'pin' => request ('pin'),    
           'level' => request ('level'),
           'status' => request ('status')  


       ]);


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit($members)
    {
        //
        $member = Members::find($members);

        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $members)
    {
        //

       $this->validate(request(), [
        'id' => 'required',
        'name' => 'required',
       // 'pin' => 'required',
        'level' => 'required',
        'status' => 'required'

    ]);


       $member = Members::find($members);

       $member->id = $request->get('id');
       $member->name = $request->get('name'); 
       $member->pin = $request->get('pin');
       $member->level = $request->get('level');
       $member->status = $request->get('status');
       $member->save();


       return back();
   }

   public function setPin($request, $members)
    {
        //

       $member = Members::find($members);

       
       $member->pin = $request->get('pin');
       $member->save();


       return back();
   }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Members $members)
    {
        //
    }
}
