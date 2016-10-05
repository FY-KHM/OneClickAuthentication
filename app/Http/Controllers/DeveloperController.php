<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\switcher;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class DeveloperController extends Controller
{
    //

    public function admin(){
    	
    	if(Auth::check())
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
    	}
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

    public function changeit()
    {
        if(Input::get('Github')!='on')
        {
            $github=switcher::where('name','Github')->first();
            $github->type=0;
            $github->save();
        }
        else
        {
            $github=switcher::where('name','Github')->first();
            $github->type=1;
            $github->save();   
        }
        if(Input::get('Facebook')!='on')
        {
            $fb=switcher::where('name','Facebook')->first();
            $fb->type=0;
            $fb->save();
        }
        else
        {
            $fb=switcher::where('name','Facebook')->first();
            $fb->type=1;
            $fb->save();   
        }
        if(Input::get('Google')!='on')
        {
            $gl=switcher::where('name','Google')->first();
            $gl->type=0;
            $gl->save();
        }
        else
        {
            $gl=switcher::where('name','Google')->first();
            $gl->type=1;
            $gl->save();   
        }
        if(Input::get('Linkedin')!='on')
        {
            $lin=switcher::where('name','Linkedin')->first();
            $lin->type=0;
            $lin->save();
        }   
        else
        {
            $lin=switcher::where('name','Linkedin')->first();
            $lin->type=1;
            $lin->save();   
        } 

        //dd(Input::all());
        return redirect('/dev/settings');        
    }
}
