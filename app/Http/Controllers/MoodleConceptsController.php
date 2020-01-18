<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\MoodleConcept;
use App\MoodleCourse;

class MoodleConceptsController extends Controller
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
    public function create($id)
    {
        $course = MoodleCourse::find($id);
        //return view('lesson_units.show')->with('lesson_unit', $lesson_unit);
        //return view ('moodle_concepts.create')->with('lesson_unit', $lesson_unit);
        return view ('moodle_concepts.create')->with('course', $course);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moodle_course_id = preg_replace("/[^0-9]/", '', URL::previous());
        if(count($request->title) > 0)
        {
        foreach($request->title as $item=>$v){
            $data2=array(
                'title'=>$request->title[$item],
                'moodle_course_id'=>$moodle_course_id
            );
        MoodleConcept::insert($data2);
      }
        }
        return redirect ('/moodle_courses/'.$moodle_course_id)->with('success','Concepts added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
