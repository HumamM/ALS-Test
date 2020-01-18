<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson_unit extends Model
{
    protected $table = 'lesson_units';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function concepts(){
        return $this->hasMany('App\Concept');
    }
}
