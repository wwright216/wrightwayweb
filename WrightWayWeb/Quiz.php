<?php

namespace WrightWayWeb;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	protected $fillable = [
		'Question1',
		'Question2',
		'Question3',
		'Question4'
	];
}
