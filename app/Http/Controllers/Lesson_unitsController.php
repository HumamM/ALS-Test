<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Lesson_unit;
use App\Course;
use App\Concept;
use App\Learningobject;


class Lesson_unitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lesson_units = Lesson_unit::orderBy('title','asc')->paginate(10);
        //$courses = Course::orderBy('title','asc')->take(10)->get();
        return view('lesson_units.index')->with('lesson_units', $lesson_units);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('lesson_units.create');
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
    
            //Create Lesson Unit
            $lesson_unit = new Lesson_unit;
            $lesson_unit->title = $request->input('title');
            $lesson_unit->description = $request->input('description');
            $courseid = preg_replace("/[^0-9]/", '', URL::previous());
            $lesson_unit->course_id = (int)$courseid;
            $lesson_unit->save();
    
            //return redirect ('/courses')->with('success', 'Lesson Created');
            return redirect ('/courses/'.$courseid)->with('success', 'Lesson Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson_unit = Lesson_unit::find($id);
        return view('lesson_units.show')->with('lesson_unit', $lesson_unit);
    }

    public function showconcepts($id)
    {
        $lesson_unit = Lesson_unit::find($id);
        $data = ['lesson_unit' => $lesson_unit, 'concepts' => $lesson_unit->concepts];
        return view('lesson_units.showconcepts')->with($data);
    }

    //public function showlearningobjects($id)
    //{
    //    $lesson_unit = Lesson_unit::find($id);
     //   return view('lesson_units.showconcepts')->with('concepts', $lesson_unit->concepts);
    //}

    public function concepts($id)
    {
        $lesson_unit = Lesson_unit::find($id);
        $data = ['lesson_unit' => $lesson_unit, 'concepts' => $lesson_unit->concepts];
        return view('lesson_units.concepts')->with($data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson_unit = Lesson_unit::find($id);
        return view('lesson_units.edit')->with('lesson_unit', $lesson_unit);
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
