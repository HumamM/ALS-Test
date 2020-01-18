<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Webservice;
use App\MoodleCourse;
use App\MoodleConcept;

class MoodleCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $moodle_courses = MoodleCourse::orderBy('fullname','asc')->paginate(10);
        return view('moodle_courses.index')->with('courses', $moodle_courses);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $webclient = new Webservice();
        $courses = $webclient->getCourses();
        return view ('moodle_courses.create', compact('courses'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $webclient = new Webservice();
        $courses = $webclient->getCourses();
        $moodle_course = new MoodleCourse;
        $moodle_course->fullname = $request->input('fullname');
        foreach ($courses as $course) {
            if ($course['fullname'] == $moodle_course->fullname){
                $moodle_course->moodle_course_id = $course['id'];
                $moodle_course->shortname = $course['shortname'];
                $moodle_course->summary = $course['summary'];
        
        }
    }
        
        //$course->description = $request->input('description');
        $moodle_course->user_id = auth()->user()->id;
        $moodle_course->save();

        return redirect ('/courses')->with('success', 'Moodle Course Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = MoodleCourse::find($id);
        return view('moodle_courses.show')->with('course', $course);
    }

    public function showconcepts($id)
    {
        $course = MoodleCourse::find($id);
        return view('moodle_courses.showconcepts')->with('concepts', $course->moodle_concepts);
    }

    public function concepts($id)
    {
        $course = MoodleCourse::find($id);
        $data = ['course' => $course, 'concepts' => $course->moodle_concepts];
        return view('moodle_courses.concepts')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
