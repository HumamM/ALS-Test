<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnerQuiz extends Model
{
    protected $fillable = [
        'learner_id',
        'quiz_id'
    ];

    protected $table = 'learner_quizzes';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function learner()
    {
        return $this->belongsTo(Learner::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
