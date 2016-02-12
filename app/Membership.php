<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
	protected $table = 'memberships';
    protected $fillable = ['description', 'price', 'month', 'day'];

}
