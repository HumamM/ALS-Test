<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learning_style extends Model
{
    protected $table = 'learning_styles';
    public $primaryKey = 'id';

    public function learning_objects(){
    return $this->belongsToMany('App\Learning_object');
    }

}
