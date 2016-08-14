<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
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
						->where('lastdonated', '<', $now->subMonths(3))
    					->get();
    	
    	for($i=0;$i<count($donors);$i++) 	
    	{
    		$ph = $donors[$i]['Contact'];
    		$post_data = array(
		    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
		    // For promotional, this will be ignored by the SMS gateway
		    'From'   => 'SAMPLE',
		    'To'    => $ph,
		    'Body'  => 'EMERGENCY! Blood of type '.$bloodgroup.' needed! Location : ABC Hospital Chennai,India'
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

    	for($i=0;$i<count($donors);$i++) 	
    	{
			$post_data = array(
			    'From' => "09677177234",
			    'To' => $donors[$i]['Contact'],
			    'CallerId' => "09243422233",
			    'TimeLimit' => "<time-in-seconds> (optional)",
			    'TimeOut' => "<time-in-seconds (optional)>",
			    'CallType' => "promo" //Can be "trans" for transactional and "promo" for promotional content
			);
			 
			$exotel_sid = "nitt5"; // Your Exotel SID - Get it from here: http://my.exotel.in/settings/site#api-settings
			$exotel_token = "25774923fb921f9af0674e32ac5c5a0d4f7b678c "; // Your exotel token - Get it from here: http://my.exotel.in/settings/site#api-settings
			 
			$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Calls/connect";
			 
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
			 
			print "Response = ".print_r($http_result);	
		}
	   	return view('admin.registeredUsers')->with('donors', $donors);
    }

    public function reqForm()
    {
    	return view('admin.RequirementForm');
    }

}
