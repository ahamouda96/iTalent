<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Post;
use Auth;
use DB;

class LikesController extends Controller
{
    public function index(Request $request) {
        $likes = Like::all()->where('user_id', '=', Auth::user()->id)->where('post_id', '=', $request->post_id)->first();
        if ($likes == null) {
            $like = new Like;
            $like->user_id = Auth::user()->id;
            $like->post_id = $request->post_id;
            $like->like = $request->isLike;
            $like->save();
        }
        if($likes != null){
            $likes->delete();
        }
       
    }
    
    public function firstRows()
    {
        $posts = Post::all()->take(10);
        return view('posts.topposts', compact('posts'));
    }

    public function topPosts()
    {
        $posts = Post::select(DB::raw('posts.*,count(likes.id) as aggregate'))
        ->leftJoin('likes', 'likes.post_id', '=', 'posts.id')
        ->groupBy('posts.id')
        ->orderBy('aggregate','desc')
        ->limit(5)
        ->get();

        return view('posts.topposts', compact('posts'));
    }
}

