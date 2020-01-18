<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    protected $table = 'concepts';
    public $primaryKey = 'id';
    
    public function lesson_unit(){
        return $this->belongsTo('App\Lesson_unit');
    }

    public function learning_objects(){
        return $this->belongsToMany('App\Learning_object');
    }
}
