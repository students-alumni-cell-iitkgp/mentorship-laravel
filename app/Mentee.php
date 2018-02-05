<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Mentee extends Model
{
    protected $fillable = [
   	'name','email','password','hall','q1','q2','pref1','pref2','pref3','current','department','phone','roll','cgpa','hcity'
   ];
}
