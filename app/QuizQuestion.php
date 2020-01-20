<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    protected $fillable = [
        'course_id',
        'quiz_id',
        'question'

    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function Quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function QuizQuestionAnswer()
    {
        return $this->hasMany(QuizQuestionAnswer::class,'question_id');
    }
}
