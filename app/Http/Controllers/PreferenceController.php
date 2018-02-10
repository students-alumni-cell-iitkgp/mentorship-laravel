<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;
use App\Mentee;
use App\User;

class PreferenceController extends Controller
{
    public function index()
    {

    $mentors  = Mentor::get();

            $user = auth()->user();
        if($user->type == 'mentor')
            $details = Mentor::where('email',$user->email)->first();
        else if($user->type == 'mentee')
            $details = Mentee::where('email',$user->email)->first();

        $message = '';
  
   	return view('preference',compact('mentors','message','details')) ;     	
    }
}
