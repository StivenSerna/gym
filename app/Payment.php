<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table = 'payments';

	protected $fillable = ['amount', 'type', 'member_id'];

	public function member()
	{
		return $this->belongsTo('App\Member');
	}
}
