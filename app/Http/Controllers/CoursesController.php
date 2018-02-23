<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $courses = Courses::latest()->get();

       return view ('courses.index', compact('courses'));

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('courses.create');
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
            'course_name' => 'required',
            'level' => 'required'

        ]);

        
        Courses::create([

           'id' => request ('id'),
           'course_name' => request ('course_name'),  
           'level' => request ('level'), 
           

       ]);


        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit( $courses)
    {
        //
        $course = Courses::find($courses);

        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $courses)
    {
        //
       $this->validate(request(), [
        'id' => 'required',
        'course_name' => 'required',
        'level' => 'required'

    ]);

       
       $course = Courses::find($courses);

       $course->id = $request->get('id');
       $course->course_name = $request->get('course_name'); 
       $course->level = $request->get('level');
       $course->save();


       return back();
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
