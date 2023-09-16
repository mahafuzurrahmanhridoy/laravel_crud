<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home()
    {
        return view('home');
    }

    function blog()
    {
        return view('blog');
    }

    function about()
    {
        return view('about');
    }

    function contact()
    {
        return view('contact');
    }

    function firstBlog()
    {
        return view('blog');
    }

    function secondBlog()
    {
        return view('second-blog');
    }

    function user()
    {
        $users = User::all();
        return view('user', compact("users"));
    }
}
