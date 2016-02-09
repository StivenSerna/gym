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

    public function image()
    {
        return $this->hasOne('App\Image');
    }

    public function anthropometricMeasurements()
    {
        return $this->hasMany('App\AnthropometricMeasurement')->orderBy('created_at', 'DEC');
    }

    public function leftAnthropometrics()
    {
        return $this->hasMany('App\LeftAnthropometric');
    }

    public function rightAnthropometrics()
    {
        return $this->hasMany('App\RightAnthropometric');
    }

}
