<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnerCourse extends Model
{
    protected $fillable = [
        'course_id',
        'learner_id'

    ];

    protected $table = 'Learner_courses';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function learner()
    {
        return $this->belongsTo(Learner::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
