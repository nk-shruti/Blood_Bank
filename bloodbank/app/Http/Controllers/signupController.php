<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Donors;
use DB;

class signupController extends Controller
{
	

	public function signupForm()
    {
        return view('signup');
    }

	public function signup(Request $request)
	{	
		$validator = Validator::make($request->all(),
			[
				'name' => 'required|max:100',
				'phoneNo' => 'required|integer|min:10',
				'lastdonated' => 'required',
				'bloodgroup' => 'required',
				'address' => 'required|max:256',			

			]);
		
		if($validator->fails())
		{
			return redirect()->action('signupController@signupForm')->withErrors($validator)->withInput();
		}

		$name = $request->get('name');
		$bloodgroup = $request->get('bloodgroup');
		$phoneNo = $request->get('phoneNo');
		$address = $request->get('address');
		$lastdonated = $request->get('lastdonated');

		$donor = new Donors;
		$donor->username = $name;
		$donor->bloodgroup = $bloodgroup;
		$donor->contact = $phoneNo;
		$donor->address = $address;
		$donor->lastdonated = $lastdonated;
		$donor->save();

		return view('onRegistration');
	}

	// public function registeredView()
	// {
	// 	$users= ogc::orderBy('created_at','desc')
	// 				->get();
 //    	return view('admin.home')->with('users', $users);
	// }

	// public function userView(Request $request)
	// {  
		
	//    	$id = $request->get('id');

	// 	$user = DB::select('select * from ogc where id = ?',[$id]);   
	//     return json_encode($user[0]);
	// }
}
