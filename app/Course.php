<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function lesson_units(){
        return $this->hasMany('App\Lesson_unit');
    }

    public function UserCourse(){
        return $this->hasMany('App\UserCourse');
    }

    public function Quizzes(){
        return $this->hasMany('App\Quiz');
    }
}
