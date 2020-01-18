<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Lesson_unit;
use App\Concept;
use App\Learning_object;
use App\Course;


class Learning_objectsController extends Controller
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
        //$activity_type = ['Topic list','Lesson','Announcement','Forum','Quiz','Survey/Poll','Exercise','Assignment','Glossary','Email/Chat','Wiki','Workshop','References'];
        $media_format = ['text','audio','PPT','video','multimedia'];
        $difficulty_level = ['beginner','intermediate','advanced'];
        //$learning_mode = ['independent','collaborative','group work','mixed'];
        $learning_goal = ['knowledge','comprehension','application'];

        //$lesson_unit = Lesson_unit::find($id);
        $course = Course::find($id);
        //$concepts = [$lesson_unit->concepts];
        //return view('courses.lessons')->with($data);

        //return view ('learning_objects.create', compact('difficulty_level','media_format','activity_type','learning_mode','concepts','lesson_unit'));
        return view ('learning_objects.create', compact('difficulty_level','media_format','learning_goal','course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseid = preg_replace("/[^0-9]/", '', URL::previous());
        if(count($request->title) > 0)
        {
        foreach($request->title as $item=>$v){
            $data2=array(
                'title'=>$request->title[$item],
                'description'=>$request->description[$item],
                //'activity_type'=>$request->activity_type[$item],
                'media_format'=>$request->media_format[$item],
                //'learning_mode'=>$request->learning_mode[$item],
                'learning_goal'=>$request->learning_goal[$item],
                'language'=>$request->language[$item],
                'difficulty_level'=>$request->difficulty_level[$item],
                'typical_learning_time'=>$request->typical_learning_time[$item],
                'course_id'=>(int)$courseid
            );
        Learning_object::insert($data2);
      }
        }
        return redirect ('/courses')->with('success','Learning Objects added');
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
