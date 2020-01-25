<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'quiz_id',
        'learner_id',
        'mark'
    ];

    protected $table = 'results';
    public $primaryKey = 'id';
    public $timestamps = true;



    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function learner()
    {
        return $this->belongsTo(Learner::class);
    }
}
