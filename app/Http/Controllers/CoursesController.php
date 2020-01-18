<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson_unit;
use DB;

class CoursesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
                  
        $courses = Course::orderBy('title','asc')->paginate(10);
        //$courses = Course::orderBy('title','asc')->take(10)->get();
        return view('courses.index')->with('courses', $courses);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        //Create Course
        $course = new Course;
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->user_id = auth()->user()->id;
        $course->save();

        return redirect ('/courses')->with('success', 'Course Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->with('course', $course);
    }

    public function showlessons($id)
    {
        $course = Course::find($id);
        return view('courses.showlessons')->with('lesson_units', $course->lesson_units);
    }

    public function lessons($id)
    {
        $course = Course::find($id);
        $data = ['course' => $course, 'lesson_units' => $course->lesson_units];
        return view('courses.lessons')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        //Check for right user
        if(auth()->user()->id !==$course->user_id){
            return redirect('/courses')->with('error', 'Unathorized Page');
        }

        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        //Create Course
        $course = Course::find($id);
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->save();

        return redirect ('/courses')->with('success', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        
        //Check for right user
        if(auth()->user()->id !==$course->user_id){
            return redirect('/courses')->with('error', 'Unathorized Page');
        }

        $course->delete();

        return redirect ('/courses')->with('success', 'Course Removed');

    }

}

