<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use DB;
use App\User;

class SearchController extends Controller
{
    public function meduimsearch(){
    	$q = request()->get ( 'q' );
	    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
	    if(count($user) > 0) {
            return view('layouts.search')->withDetails($user)->withQuery ( $q );
        }else{
            $message = 'No Details found. Try to search again !';
            return view ('layouts.search', compact('message'));
        }
    }
}
