<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'question_id',
        'choice_number',
        'choice_text'
    ];

    protected $table = 'choices';
    public $primaryKey = 'id';
    public $timestamps = true;



    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
}
