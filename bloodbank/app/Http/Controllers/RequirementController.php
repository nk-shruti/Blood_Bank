<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Donors;
use DB;

class RequirementController extends Controller
{
    public function requiredBG(Request $request)
    {
    	$validator = Validator::make($request->all(),
			[
				'bloodgroup' => 'required',			
			]);
		
		if($validator->fails())
		{
			return redirect()->action('signupController@signupForm')->withErrors($validator)->withInput();
		}

		$bloodgroup = $request->get('bloodgroup');
		$quantity = $request->get('quantity');

		$donors = Donors::where('bloodgroup','=', $bloodgroup)
    					->get();
    	return view('admin.registeredUsers')->with('donors', $donors);
    }

    public function reqForm()
    {
    	return view('admin.RequirementForm');
    }

}
