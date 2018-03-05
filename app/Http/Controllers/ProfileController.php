<?php
/*
    Profile Controller contains all the function to view the profile page
    login the user with authentication

*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;
use App\Mentee;
use App\User;

class ProfileController extends Controller
{
    /*
        It alloews only logged in user to use function except the store function 
    */
    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
    }
    /*
        loggin the user using auth controller after finding the user id
    */
    public function index($id)
    {
    	$user = User::find($id);
    	auth()->login($user);
    	return redirect('/show');

    }
    /*
        It get the details of the user and pass it to show.blade.php 
    */
    public function show()
    {
        $user = auth()->user();
        if($user->type == 'mentor')
            $details = Mentor::where('email',$user->email)->first();
        else if($user->type == 'mentee')
            $details = Mentee::where('email',$user->email)->first();

        return view('show',compact('details'));
    }
    /*
        It authenticate and login the user if authenticate
        else shows suitable message 
    */
    public function store()
    {
        // auth()->attempt do not work with plain text password so changes are done in EloquentUserProvider in Validate credentials function

        if(!auth()->attempt(request(['email','password'])))
        {
           
            return back()->withErrors([
                'message' => 'Please check-in your credentials'
            ]);

        }
        return redirect('/show');
    }
    /*
        It is used to logout the user
    */
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
    
}
