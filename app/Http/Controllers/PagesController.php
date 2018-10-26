<?php

namespace App\Http\Controllers;

// use Illuminate\Auth\Middleware\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    protected function redirectTo()
    {
        return '/user';
    }
    public function getIndex()
    {
    	return view('pages.welcome');
    }

    public function getlogout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }

    public function index()
    {
    	return view('welcome1');
    }

    public function getAbout()
    {
    	return view('pages.about');
    }

    public function getComtact()
    {
    	return view('pages.contact');
    }
}
