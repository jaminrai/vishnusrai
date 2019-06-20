<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home(){

    	$articles = Article::all();
    	
    	//passing data to view
    	return view('backend/index',['articles'=>$articles]);
}

public function add(Request $request )
{
	$this->validate($request,[
		'title'=>'required',
		'description'=>'required'

	]);


	return 'pass with validate';
}
}

