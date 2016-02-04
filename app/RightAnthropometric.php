<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RightAnthropometric extends Model
{
	protected $table = 'right_anthropometrics';

	protected $fillable = ['right_arm', 'right_forearm', 'right_high_leg', 'right_lower_leg', 'right_calf', 'member_id'];

	public function member()
	{
		return $this->belongsTo('App\Member');
	}
}
