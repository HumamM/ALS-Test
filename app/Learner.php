<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
	protected $table = 'learners';
	public $primaryKey = 'id';
	public $timestamps = true;


	protected $fillable = [

		'birthdate',
		'gender',
		'phone',
		'education_qualification',
		'education_occupation',
		'education_university',
		'education_from_month',
		'education_from_year',
		'education_to_month',
		'education_to_year',
	];

}
