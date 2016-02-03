<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $fillable = ['first_name', 'second_name', 'last_name', 'email', 'phone', 'birthday', 'gender', 'address', 'document', 'date_of_admission'];

    public function medicalrecord()
    {
        return $this->hasOne('App\MedicalRecord');
    }

    public function anthropometricmeasurement()
    {
        return $this->hasOne('App\AnthropometricMeasurement');
    }

}
