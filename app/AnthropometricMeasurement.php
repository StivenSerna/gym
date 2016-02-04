<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnthropometricMeasurement extends Model
{
    protected $table = 'anthropometric_measurements';

	protected $fillable = ['weight', 'comment', 'hip', 'shoulders', 'chest', 'waist', 'height', 'abdomen', 'member_id'];

	public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
