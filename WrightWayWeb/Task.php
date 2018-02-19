<?php

namespace WrightWayWeb;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = [
		'body',
		'title'
	];
}
