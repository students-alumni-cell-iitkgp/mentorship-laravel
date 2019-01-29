<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PreferenceCode;
use App\Preference;

class PreferenceCodeController extends Controller
{
    public function addcode()
    {
    	PreferenceCode::create([

    		'codename'=>'Aerospace'

    		]);

    	PreferenceCode::create([

    		'codename'=>'Agricultural & Food Engineering'

    		]);

    	PreferenceCode::create([

    		'codename'=>'Architecture & Regional Planning'

    		]);

    	PreferenceCode::create([

    		'codename'=>'Banking & Finance'

    		]);

    	PreferenceCode::create([

    		'codename'=>'Biotechnology'

    		]);

    	PreferenceCode::create([

    		'codename'=>'Civil Engineering '

    		]);
    	PreferenceCode::create([

    		'codename'=>'Chemical Engineering'

    		]); 

    	PreferenceCode::create([

    		'codename'=>'  '

    		]);   
    	PreferenceCode::create([

    		'codename'=>'Computer Science & Engineering'

    		]);  
    	PreferenceCode::create([

    		'codename'=>'  '

    		]); 
    	PreferenceCode::create([

    		'codename'=>'Chemistry'

    		]); 
    	PreferenceCode::create([

    		'codename'=>'Electrical Engineering'

    		]); 
    	PreferenceCode::create([

    		'codename'=>'Electronics & Electrical Communication Engineering'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Geology & Geophysics'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Humanities & Social Sciences'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Industrial & Systems Engineering'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Mathematics'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Mechanical Engineering'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Metallurgical & Materials Engineering'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Mining Engineering'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Ocean Engineering & Naval Architecture'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Physics'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Entrepreneurship'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Consulting'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Data Analytics'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Software Development'

    		]);
    	PreferenceCode::create([

    		'codename'=>'Marketing'

    		]); 
    	PreferenceCode::create([

    		'codename'=>'Civil Services'

    		]);     		
        return view('home');
    }
}
