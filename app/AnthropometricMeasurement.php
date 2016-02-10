<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnthropometricMeasurement extends Model
{
	protected $table = 'anthropometric_measurements';

	protected $fillable = ['weight', 'comment', 'hip', 'shoulders', 'chest', 'waist', 'height', 'abdomen', 'member_id', 'left_anthropometric_id', 'right_anthropometric_id'];

	public function member()
	{
		return $this->belongsTo('App\Member');
	}

	public function leftAnthropometric()
	{
		return $this->belongsTo('App\LeftAnthropometric');
	}

	public function rightAnthropometric()
	{
		return $this->belongsTo('App\RightAnthropometric');
	}
}
