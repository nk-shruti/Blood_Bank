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
    	// $count = Donors::where('bloodgroup','=',$bloodgroup)->count;
    	// dd($donors);
    	for($i=0;$i<count($donors);$i++) 	
    	{
    		$ph = $donors[$i]['Contact'];
    		$post_data = array(
		    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
		    // For promotional, this will be ignored by the SMS gateway
		    'From'   => 'SAMPLE',
		    'To'    => $ph,
		    'Body'  => 'EMERGANCY! Blood needed!'
			);

			$exotel_sid = "nittrichy1"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
			$exotel_token = "a932507a316d1d87580a6319b6a44eae0b23157a"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings

			$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FAILONERROR, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

			$http_result = curl_exec($ch);
			$error = curl_error($ch);
			$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);

			curl_close($ch);
    		
    	}				
    		//insert function to send messages to everyone
    	// die();			
    	return view('admin.registeredUsers')->with('donors', $donors);
    }

    public function reqForm()
    {
    	return view('admin.RequirementForm');
    }

}
