<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

	protected $fillable = ['name', 'member_id'];

	public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
