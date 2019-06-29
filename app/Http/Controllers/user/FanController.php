<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\PostsEditRequest;

use App\Post;
use App\User;
use App\PostMedia;
use App\Category;
use Storage;
use Image; 

class FanController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('id');
        
        $categories = Category::all();
        $users = User::orderBy('id','desc')->paginate(5);
        if(request()->has('search') && request()->get('search') != ''){
            $posts = $posts->where('name', 'like', '%'.request()->get('search').'%');
        }
        return view('fan.home')->withPosts($posts)->withCategories($categories)->withUsers($users);        
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('fan.posts.show')->withPost($post);
    }

    public function category() {
        $categories = Category::orderBy('id', 'desc')->paginate(3);
        return view('fan.category.index')->withCategories($categories);
    }
 
    public function showAll($name) {
        $categories = Category::all()->where('name', '=', $name)->first();
        if ($categories != null) {
            $posts = Post::all()->where('category_id', '=', $categories->id)->sortByDesc('id');
            return view('fan.category.showAll')->withPosts($posts);
        }
        return redirect('/post');
    }

    public function meduimsearch(){
    	$q = request()->get ( 'q' );
	    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
	    if(count($user) > 0) {
            return view('fan.layouts.search')->withDetails($user)->withQuery ( $q );
        }else{
            $message = 'No Details found. Try to search again !';
            return view ('fan.layouts.search', compact('message'));
        } 
    }

    public function profile($id, $slug = null){
        $user = User::findOrFail($id);
        

        return view('fan.profile.index')->withUser($user);
    }
}
