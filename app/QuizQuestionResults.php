<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestionResults extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'quiz_id',
        'question_id',
        'answer_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function question()
    {
        return $this->belongsTo(QuizQuestion::class);
    }

    public function answer(){
        return $this->belongsTo(QuizQuestionAnswer::class, 'answer_id');
    }
}
