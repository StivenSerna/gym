<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
	protected $table = 'medical_records';
	protected $fillable = ['suffered_diseases', 'current_diseases', 'suffered_fractures', 'observation', 'member_id'];


}
