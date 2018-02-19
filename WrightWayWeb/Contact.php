<?php

namespace WrightWayWeb;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
		'name',
		'email',
		'message'
	];
}
