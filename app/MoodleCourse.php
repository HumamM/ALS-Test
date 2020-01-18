<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoodleCourse extends Model
{
    protected $table = 'moodle_courses';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function moodle_concepts(){
        return $this->hasMany('App\MoodleConcept');
    }

    public function course_modules(){
        return $this->hasMany('App\CourseModule');
    }
}
