<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class DeveloperController extends Controller
{
    //

    public function admin(){
    	
    	/*if(Auth::check())
    	{
    		$user = Auth::user();
	    	if($user->role=="developer")
	    	{
	    		return view('ind');
	    	}
	    	else
	    	{
	    		return redirect('/');
	    	}
    	}	
    	else{
    		return redirect('/');	
    	}*/
        return view('ind');
    	
    }

    public function logs(){

    	return view('logview');
    }
    public function settings(){

        return view('settings');
    }

    public function userinfo()
    {
    	return view('userinfo');
    }
}
