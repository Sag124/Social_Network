<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $post_count = Post::all()->count();
        
        return view('posts.index')->withPosts($posts)->withPost_count($post_count);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'content' => 'required',
            ));

        $uid = Auth::user()->id;
        $post = new Post;

        $post->user_id = $uid;
        $post->content = $request->content;
        
        //if there is a photo in picture then run thhis else leave it like that
       
        if($request->file('image'))
        {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $path = 'public/posts';
        $file->move($path, $filename);
        // DB::table('users')->where('id', $user_id)->update(['image' => $filename]);
        $post->image = $filename;
        }
        // 
        $post->save();


        Session::flash('success', 'The post was successfully saved!');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
