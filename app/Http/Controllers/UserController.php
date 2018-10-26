<?php

namespace App\Http\Controllers;

use App\Friendship;
use App\Notification;
use App\Post;
use App\Profile;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function getAll()
    {
        $uid = Auth::user()->id;
        $friends = DB::table('profiles')->leftJoin('users', 'users.id', '=', 'profiles.user_id')->where('users.id','!=', $uid)->get();
        return view('user.findFriends')->withFriends($friends);
    }

	public function getIndex()
    {
        $user = User::where('id', '=' , Auth::user()->id);
    	return view('user.index')->withUser($user);
    }

    public function editProfile()
    {
        $user = Auth::user()->id;
        $skills = Skill::all();
        return view('user.editProfile')->with('data', Auth::user()->profile)->withUser($user)->withSkills($skills);
    }

    public function uploadPhoto(Request $request) {
        $file = $request->file('image');
        // $file = Input::get('image');
        $filename = $file->getClientOriginalName();
        $path = 'public/img';
        $file->move($path, $filename);
        $user_id = Auth::user()->id;
        DB::table('users')->where('id', $user_id)->update(['image' => $filename]);
        //return view('profile.index');
        return back();
    }

    public function updateProfile(Request $request)
    {
        $user_id =  Auth::user()->id;
        $profile = Profile::where('user_id', '=' , $user_id)->first();

        $profile->city = $request->input('city');
        $profile->year = $request->input('year');
        $profile->about = $request->input('about');
        $profile->branch = $request->input('branch');
        $profile->save();

        if (isset($request->skills)) {
            $profile->skills()->sync($request->skills);
        }
        else
        {
            $profile->skills()->sync(array());
        }
        return redirect()->route('profile', ['$slug' => Auth::user()->slug]);
    }

    public function getProfile($slug)
    {
        // $slug = $this->slug;
        $user = User::where('slug', '=', $slug)->first();
        $user_id = $user->id;
        $id = $user->id;
        $profile = Profile::where('user_id', '=', $user_id)->first();
        $posts = Post::where('user_id', '=', $user_id)->get();
        $count = Post::where('user_id', '=', $user_id)->count();

        $request = Friendship::where('status', '=', NULL)->where('user_requested','=', Auth::user()->id)->get();
        // $likes = Like::where('')        
    	return view('user.profile')->withUser($user)->withProfile($profile)->withPosts($posts)->withId($id)->withCount($count);
    }
    
    public function getMyPosts($slug)
    {
        $user = User::where('slug', '=', $slug)->first();
        $user_id = $user->id;
        // $profile = Profile::where('user_id', '=', $user_id)->first();

        $posts = Post::where('user_id', '=', $user_id)->get();

        return view('user.myposts')->withPosts($posts);
    }
              



    public function sendRequest($id) {
        Auth::user()->addFriend($id);
        return back();
    }

    public function getRequests()
    {
        $uid = Auth::user()->id;
        $requests = DB::table('friendships')
                        ->rightJoin('users', 'users.id', '=', 'friendships.requester')
                        ->where('status', '=', NULL)
                        ->where('friendships.user_requested', '=', $uid)->get();
        $rcount = $requests->count();                
        return view('user.requests')->withRequests($requests)->withRcount($rcount);
    }


    public function getAccept($name, $id)
    {
          $uid = Auth::user()->id;
        $checkRequest = Friendship::where('requester', $id)
                ->where('user_requested', $uid)
                ->first();
        if ($checkRequest) {
            // echo "yes, update here";
            $updateFriendship = DB::table('friendships')
                    ->where('user_requested', $uid)
                    ->where('requester', $id)
                    ->update(['status' => 1]);
            $notifications = new Notification;
            $notifications->note = 'accepted your friend request';
            $notifications->user_accepted = $id; // who is accepting my request
            $notifications->user_logged = Auth::user()->id; // me
            $notifications->status = '1'; // unread notifications
            $notifications->save();
            if ($notifications) {
                return back()->with('msg', 'You are now Friend with ' . ucwords($name));
            }
        } else {
            return back()->with('msg', 'You are now Friend with this user');
        }
    }

    public function getFriends()
    {
        
        $uid = Auth::user()->id;
        $friends1 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.user_requested') // who is not loggedin but send request to
                ->where('status', 1)
                ->where('requester', $uid) // who is loggedin
                ->get();
        //dd($friends1);
        $friends2 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.requester')
                ->where('status', 1)
                ->where('user_requested', $uid)
                ->get();
        $friends = array_merge($friends1->toArray(), $friends2->toArray());
        $data = $friends1->count();  
        return view('user.friends')->withFriends($friends)->withData($data);
        // $this->getProfile($slug,$data);

    }

    public function getNotifications()
    {
        $notifications = Friendship::where('status', '=', NULL)->where('user_requested', Auth::user()->id)->get();

        return view('pages.notifications')->withNotifications($notifications);
        // return view('partials._header')->withNotifications($notifications);

    }

}
