<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use Session;

class AdminController extends Controller
{

     public function login(Request $request)
     {
        return view('admin.login');

     }

    
    public function adminAuth(Request $request)
    {
    	$username = $request->get('username');
    	$password = sha1($request->get('password'));

    	$user = Admin::where('username','=', $username)
    					->where('password','=', $password)
    					->get();
        // dd($user);

    	if(count($user)==1)
    	{
    		Session::put('username',$username);
    		return view('admin.home');
    	}
    	else
    	{
    		return view('admin.login');
    	}
    }


    public function logout()
    {
        Session::flush();
        return view('admin.login');
    }

    public function homeView()
    {
        return view('admin.home');
    }

}
