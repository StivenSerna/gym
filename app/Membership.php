<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
	protected $table = 'memberships';
	protected $fillable = ['description', 'price', 'month', 'day'];

	public function affiliations()
	{
		return $this->hasMany('App\Affiliation')->orderBy('created_at', 'DEC');
	}

}
