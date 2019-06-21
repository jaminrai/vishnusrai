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


	$articles = new Article;  //New Obeject

				$articles->title = $request->input('title');
				$articles->description = $request->input('description');
				$articles->save();

	return redirect('/posts')->with('info','Article saved succcessfully!');
}


public function update($id){

	$articles = Article::find($id);
	return view('backend/update',['articles'=>$articles]);

}


public function edit($request,$id){

$this->validate($request,[
		'title'=>'required',
		'description'=>'required'

	]);


$data=array(
'title'=>$request->input('title'),
'description'=>$request->input('description')



	);



Article::where('id',$id)->update($data);

return redirect('/post')->with('info','Edit/update successfully');

}


public function delete()
{

	return 'this is delete';
}


}

