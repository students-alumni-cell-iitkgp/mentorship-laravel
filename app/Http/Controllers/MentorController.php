<?php
/*
	Contains All the contrioller function to create the mentor profile 
	It has middle ware which only allows guest to view the mentor registration page

*/
namespace App\Http\Controllers;
use App\Mentor;
use App\User;

use Illuminate\Http\Request;

class MentorController extends Controller
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

		return view ('mentor.registration');
	}
	/*
		Store the all the details in Mentor table in database as well as 
		email and password  and type='mentor' in user table in database
	*/
	public function store()

	{

		$this->validate(request(),[
			'password' => 'required|confirmed',
			'email' => 'unique:users'
		]);
		Mentor::create([
			'name' => request('name'),
			'password' => bcrypt(request('password')),
			'department' => request('department'),
			'email' => request('email'),
			'pout' =>request('pout'),
			'foe' =>request('foe'),
			'ccity' =>request('ccity'),
			'mentee' => request('mentee'),
			'pref1' =>request('pref1'),
			'pref2' =>request('pref2'),
			'pref3' =>request('pref3'),
			'phone' => request('phone'),
			'fb' => request('fb'),
			'linkedin' => request('linkedin'),
			'firm' => request('firm'),
			'desg' => request('desg')

		]);
		$user = User::create([
			'name' => request('name'),
			'password' => bcrypt(request('password')),
			'type' => 'mentor',
			'email' => request('email'),
		]);

		auth()->login($user);// login the user using auth controller
		
		return redirect('/show/'.$user->id);// sends get request to showcontroller with user id	
	}
}
