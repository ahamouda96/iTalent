<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    

    public function listUser() {
        $users = User::orderBy('id', 'desc')->paginate(40);
        return view('user.index')->withUsers($users);
    }
    public function showUser($id) {
        $user = User::find($id);
        return view('user.show')->withUser($user);
    }

    public function frontendindex()
    {
        return view('frontend.home');
    }
 
    public function profile($id, $slug = null){
        $user = User::findOrFail($id);
        $posts = Post::all()->sortByDesc('id');
        $categories = Category::all();

        return view('profile.index')->withPosts($posts)->withCategories($categories)->withUser($user);
    }

    // public function friendsuggest() {
    //     $users = User::orderBy('id', 'desc')->paginate(5);
    //     return view('posts.rightaside')->withUsers($users);
    // }

    // public function showUser($id) {
    //     $user = User::find($id);
    //     return view('profile.index')->withUser($user);
    // }
}
