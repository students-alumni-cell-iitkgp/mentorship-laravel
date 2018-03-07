<?php
/*

	Contains All the contrioller function to create the mentee profile 
	It has middle ware which only allows guest to view the mentee registration page



*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentee;
use App\User;
class MenteeController extends Controller
{
	/*
		Allows only guest to acces these function
	*/
	public function __construct()
	{
		$this->middleware('guest');
	}
	/*
		Show registration page for mentee
	*/
	public function create()
	{
		//return view ('mentee.registration');
		return view ('mentee.registration');
	}

	/*
		Store the all the details in Mentee table in database as well as 
		email and password  and type='mentee' in user table in database
	*/
	public function store()

	{

		$this->validate(request(),[
			'password' => 'required|confirmed'
		]);
		Mentee::create([
			'name' => request('name'),
			'password' => request('password'),
			'department' => request('department'),
			'email' => request('email'),
			'hall' =>request('hall'),
			'roll' => request('roll'),
			'pref1' =>request('pref1'),
			'pref2' =>request('pref2'),
			'pref3' =>request('pref3'),
			'q1' => request('q1'),
			'q2' => request('q2'),
			'cgpa' => request('cgpa'),
			'current' => request('current'),
			'hcity' => request('hcity'),
			'phone' => request('phone'),			
			'fb'=>request('fb'),
			'linkedin'=>request('linkedin')

		]);
		$user = User::create([
			'name' => request('name'),
			'password' => request('password'),
			'type' => 'mentee',
			'email' => request('email'),
		]);

		auth()->login($user);// login the user using auth controller
		return redirect('/show/'.$user->id);// sends get request to showcontroller with user id	
	}
}
