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

    public function user(){
        return $this->belongsTo('App\User');
    }
}
