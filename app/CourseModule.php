<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    protected $table = 'course_modules';
    public $primaryKey = 'id';

    public function moodle_course(){
        return $this->belongsTo('App\MoodleCourse');
    }
}
