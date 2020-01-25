<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
protected $table = 'teachers';
	public $primaryKey = 'id';
	public $timestamps = false;


	protected $fillable = [

		'material_name',
	];
}
