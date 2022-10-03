<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function store($request){

        $voulunteer = new Volunteer();
        $voulunteer->full_name = $request->full_name;
        $voulunteer->email = $request->email;
        $voulunteer->specialty = $request->specialty;
        $voulunteer->follow_campaign = $request->follow_campaign;
        $voulunteer->save();
    }
}
