<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;
use App\Mentee;
use App\User;
use App\Preference;
use App\PreferenceCode;
use Auth;
use DB;

class PreferenceController extends Controller
{
    public function index()
    {

        if(Auth::check())
            {
                $mentors  = Mentor::get();
                $preferences = Preference::get();
                $preferencecodes = PreferenceCode::get();

                $user = auth()->user();
                if($user->type == 'mentor')
                    $details = Mentor::where('email',$user->email)->first();
                else if($user->type == 'mentee')
                    $details = Mentee::where('email',$user->email)->first();

                $message = '';
                
                return view('preference',compact('mentors','message','details','preferences','preferencecodes')) ;  

            } 
            else 
                return redirect('/');  	
        }

        Public function create()
        {       

            if(Auth::check())
                {

                    $preferences = Preference::get();



                    $mentors  = Mentor::get();

                    $user = auth()->user();
                    if($user->type == 'mentor')
                        $details = Mentor::where('email',$user->email)->first();
                    else if($user->type == 'mentee')
                        $details = Mentee::where('email',$user->email)->first();

                    $message = '';
                    return view ('mentee.gpreference',compact('message','mentors','details','preferences'));
                }
                else
                    return redirect('/');
            }

            public function store()
            {    


                if(Auth::check())   {
                   $mentee = Mentee::where('email',auth()->user()->email)->get();


                   
                   $prefs=Preference::create([

                    'menteerollno' =>$mentee[0]['roll'],  
                    'menteename' => Auth::user()->name,
                    'mentee_email' => $mentee[0]['email'],
                    'mentee_contactno' =>$mentee[0]['phone'],
                    'pf1' => request('pf1')

                ]);
                   $data = array();
                   $data['mentorid'] = substr($prefs->pf1, -1);
                   DB::table('mentees')->where('email',auth()->user()->email)->update($data); 
                   return redirect('/show');
                   echo "<script type='text/javascript'>alert('Succesfully allotted your mentor ');</script>"; 

               }
               else
                return redirect('/');

        }


        public function fp()
        {
            return view('forgotpassword');
        }





        public function fpstore(Request $request)
        {

        $this->validate(request(),[
            'password' => 'required|confirmed'
        ]);

        $data = array();
        $data['password'] = $request->password;


        DB::table('mentees')->where('email',$request->email)->update($data);   
        DB::table('mentors')->where('email',$request->email)->update($data); 
        DB::table('users')->where('email',$request->email)->update($data);    

        return redirect('/');
        }
    }
