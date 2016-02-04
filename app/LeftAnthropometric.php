<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeftAnthropometric extends Model
{
	protected $table = 'left_anthropometrics';

	protected $fillable = ['left_arm', 'left_forearm', 'left_high_leg', 'left_lower_leg', 'left_calf', 'member_id'];

	public function member()
	{
		return $this->belongsTo('App\Member');
	}
}
