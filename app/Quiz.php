<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'mark',
        'description'
    ];

    protected $table = 'quizzes';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function learnerQuiz()
    {
        return $this->hasMany(LearnerQuiz::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }
}
