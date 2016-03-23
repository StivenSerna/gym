<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
	protected $table = 'affiliations';

	protected $fillable = ['initiation', 'finalization', 'price', 'type', 'active', 'member_id', 'membership_id'];

	public function member()
	{
		return $this->belongsTo('App\Member');
	}

	public function membership()
	{
		return $this->belongsTo('App\Membership');
	}
}
