<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'learner_id', 'question_id', 'choice_id','is_correct'
    ];

    protected $table = 'answers';
    public $primaryKey = 'id';
    public $timestamps = true;



    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }

    public function learner()
    {
        return $this->belongsTo(Learner::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
