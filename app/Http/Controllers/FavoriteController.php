<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\User;
use App\Favorite;
use App\Like;
use DB;
class FavoriteController extends Controller
{
    public function add($post)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_posts()->where('post_id',$post)->count();
        if ($isFavorite == 0)
        {
            $user->favorite_posts()->attach($post);
            
            return redirect()->back();
        } else {
            $user->favorite_posts()->detach($post);
            
            return redirect()->back();
        }
    }

    
}
