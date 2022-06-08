<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class adminPageController extends Controller {
    public function __construct()
	{
		$this->middleware('auth');
	}
    public function index(){
        $mentees =DB::select('select * from mentees');
        $noOfmentees=count($mentees);

        $mentors=DB::select('select * from 	mentors');
        $noOfmentors=count($mentors);


        $migrations=DB::select('select * from migrations');
        $noOfmigrations=count($migrations);


        $preferences=DB::select('select * from preferences');
        $noOfpreferences=count($preferences);

        $preference_codes=DB::select('select * from preference_codes');
        $noOfpreference_codes=count($preference_codes);

        $users=DB::select('select * from users');
        $noOfusers=count($users);




        return view('adminPage',
                    ['mentees'=>$noOfmentees,'mentors'=>$noOfmentors,'migrations'=>$noOfmigrations,'preferences'=>$noOfpreferences,
                        'preference_codes'=>$noOfpreference_codes,'users'=>$noOfusers,
                    ]);
    }

}
