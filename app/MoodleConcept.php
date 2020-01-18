<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoodleConcept extends Model
{
    protected $table = 'moodle_concepts';
    public $primaryKey = 'id';

    public function moodle_course(){
        return $this->belongsTo('App\MoodleCourse');
    }
}
