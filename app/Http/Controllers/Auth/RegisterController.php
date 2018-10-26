<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $request;
    protected $redirectTo = '/posts';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
         // $this->request = $request;
    }

//     public function __contruct(Request $request)
// {
//     $this->request = $request;
// }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'body' => 'required|max:100',
            // 'image' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['gender'] == 'male') {
            $pic_path = 'boy.jpg';
        }
        else
        {
            $pic_path = 'girl.png';
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'slug' => str_slug($data['name'], '-'),
            'body' => $data['body'],
            'image' => $pic_path,
            'password' => bcrypt($data['password']),
        ]);

        // $file = $request->file('image');
        // $filename = $file->getClientOriginalName();
        // $path = 'public/img';
        // $file->move($path, $filename);
        // $user->update(['image' => $file_name]);

        Profile::create(['user_id' => $user->id]);

        return $user;
    }
}
