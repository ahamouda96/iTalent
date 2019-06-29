<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use App\Post;
use Auth;


class ProfileController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.profile');
    }

    public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
        $user->links = $request->input('links');

        if($request->has('password') && $request->get('password') != null){
            $user->password = bcrypt($request['password']);
        }

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')).'_'.time();
            // Define folder path
            //$folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;

            $image->move('uploads/images', $filePath);
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }

    public function latestPosts()
    {
        
        $posts = Post::where('user_id', Auth::user()->id)->paginate(4);
        // $posts = Post::all()->sortByDesc('id')->paginate(4);
        return view('profile.rightaside', compact('posts'));
    }

    public function add($id)
    { 
        $user = Auth::user();
        $isFollow = $user->followings()->where('leader_id',$id)->count();
        if ($isFollow == 0)
        {
            $user->followings()->attach($id);

            return redirect()->back();
        } else {
            $user->followings()->detach($id);
            
            return redirect()->back();
        }
    }

    // public function followUser(int $profileId)
    // {
    //     $user = User::find($profileId);
    //     if(! $user) {
    //     return redirect()->back()->with('error', 'User does not exist.'); 
    // }
    //     $user->followers()->attach(auth()->user()->id);
    //     return redirect()->back()->with('success', 'Successfully followed the user.');
    // }

    // public function unFollowUser(int $profileId)
    // {
    //     $user = User::find($profileId);
    //     if(! $user) {
    //     return redirect()->back()->with('error', 'User does not exist.'); 
    // }
    //     $user->followers()->detach(auth()->user()->id);
    //     return redirect()->back()->with('success', 'Successfully unfollowed the user.');
    // }

    // public function show(int $userId)
    // { 
    //     $user = User::find($userId);
    //     $followers = $user->followers;
    //     $followings = $user->followings;
    //     return view('user.show', compact('user', 'followers' , 'followings'));
    // }

   
}
