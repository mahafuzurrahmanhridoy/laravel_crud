<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        $products = Product::latest()->paginate(12);
        $categories = Category::pluck('title', 'id')->toArray();
        return view('welcome', compact('products', 'categories'));
    }

    public function categoryWiseProducts($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $products = $category->products()->paginate(12);
        $categories = Category::pluck('title', 'id')->toArray();
        return view('category_wise_products', compact('products', 'categories'));
    }
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
