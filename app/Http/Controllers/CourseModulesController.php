<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Classes\Webservice;
use App\CourseModule;
use App\MoodleCourse;

class CourseModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course)
    {
        $moodle_course = MoodleCourse::find($course);
        $webclient = new Webservice();
        $modules = $webclient->getCourseContent($moodle_course->moodle_course_id);
        return view ('course_modules.index', compact('modules'));

        //$course_modules = CourseModule::orderBy('section_no','asc')->paginate(20);
        //return view('moodle_courses.index')->with('courses', $moodle_courses);
        //return view ('course_modules.index', compact('course_modules', $course_modules));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    public function storemodules()
    {
        $course_id = preg_replace("/[^0-9]/", '', URL::previous());
        $moodle_course = MoodleCourse::find($course_id);
        $webclient = new Webservice();
        $modules = $webclient->getCourseContent($moodle_course->moodle_course_id);

        if(count($modules) > 0)
        {
            foreach ($modules as $module) {
                $module_data = array();
                $module_data=array_merge($module_data, array('section_name'=>$module['name'],'section_no'=>$module['section'],'section_id'=>$module['id'], 'moodle_course_id'=>$moodle_course->moodle_course_id, 'course_id'=>$course_id,));
                foreach ($module['modules'] as $mod) {
                    if ($mod['modname'] == 'folder' and $mod['visible'] == 1){
                        $module_data = array_merge($module_data, array('moodle_id'=>$mod['id'],'name'=>$mod['name'],'modname'=>$mod['modname']));
                        CourseModule::insert($module_data);
                    }
                    else {		
                        $module_data = array_merge($module_data, array('moodle_id'=>$mod['id'],'name'=>$mod['name'],'modname'=>$mod['modname']));
                        CourseModule::insert($module_data);
                    }
            
                }
            
            }
        }

        return redirect ('/moodle_courses')->with('success', 'Course modules added');
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
