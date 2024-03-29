<?php

namespace App\Models;

use Ballybran\Database\Model;

class User extends Model
{
	protected $table = 'users';

    public $timestamps = true;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'user_name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
        'password', 'remember_token',
	];
}
