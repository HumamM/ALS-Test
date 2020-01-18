<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learning_object extends Model
{
    protected $table = 'learning_objects';
    public $primaryKey = 'id';
   
    public function concepts(){
        return $this->belongsToMany('App\Concept');
    }

    public function learning_styles(){
    return $this->belongsToMany('App\Learning_style');
    }
}