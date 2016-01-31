<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MedicalRecordsController extends Controller
{
    public function create()
    {
    	return view('medicalrecord.create');

    }

    public function edit()
    {
    	
    }

    public function update($id)
    {
    	
    }
}
