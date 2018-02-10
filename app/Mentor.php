<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
   protected $fillable = [
   	'name','email','password','pout','foe','ccity','pref1','pref2','pref3','mentee','department','phone','fb','linkedin','firm','desg'
   ];
}
