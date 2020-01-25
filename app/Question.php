<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'quiz_id',
        'title',
        'question_text',
        'mark'
    ];

    protected $table = 'questions';
    public $primaryKey = 'id';
    public $timestamps = true;



    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function choice()
    {
        return $this->hasMany(Choice::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

}
