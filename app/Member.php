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

    public function affiliations()
    {
        return $this->hasMany('App\Affiliation')->orderBy('finalization', 'DEC');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment')->orderBy('created_at', 'DEC');
    }

}
