<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Concept;
use App\Learning_object;
use App\Lesson_unit;
use DB;

class ConceptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concepts = Concept::orderBy('title','asc')->paginate(10);
        return view('concepts.index')->with('concepts', $concepts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $lesson_unit = Lesson_unit::find($id);
        //return view('lesson_units.show')->with('lesson_unit', $lesson_unit);
        return view ('concepts.create')->with('lesson_unit', $lesson_unit);
    }

    public function addLOs()
    {
        $los = Learning_object::all();
        $learning_objects = array();
        foreach($los as $learning_object) {
        $learning_objects[] = $learning_object->title;
        }

        return view ('concepts.addLOs', compact('learning_objects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data=$request->all();
        $lesson_unit_id = preg_replace("/[^0-9]/", '', URL::previous());
        if(count($request->title) > 0)
        {
        foreach($request->title as $item=>$v){
            $data2=array(
                'title'=>$request->title[$item],
                'lesson_unit_id'=>$lesson_unit_id
            );
        Concept::insert($data2);
      }
        }
        return redirect ('/lesson_units/'.$lesson_unit_id)->with('success','Concepts added');
       
    }


    public function concept_learning_object(Request $request)
    {
        $concept_id = preg_replace("/[^0-9]/", '', URL::previous());
        if(count($request->learning_objects) > 0){
            foreach($request->learning_objects as $item)
            {
                $learning_object_id = DB::select('SELECT * FROM learning_objects WHERE title = ?', [$item]);
                $data3=array($concept_id, $learning_object_id);
                DB::insert('insert into concept_learning_object (concept_id, learning_object_id) values (?, ?)', [$concept_id, $data3[1][0]->id]);
            }
        }
        return redirect ('/concepts/'.$concept_id)->with('success','Learning Objects added');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concept = Concept::find($id);
        return view('concepts.show')->with('concept', $concept);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concept = Concept::find($id);
        return view('concepts.edit')->with('concept', $concept);
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
        ]);

        $concept = Concept::find($id);
        $concept->title = $request->input('title');
        $concept->save();

        return redirect ('/lesson_units/'.$concept->lesson_unit_id)->with('success', 'Concept Updated');
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