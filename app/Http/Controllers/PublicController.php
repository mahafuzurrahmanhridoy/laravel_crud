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
        // $categories = Category::pluck('title', 'slug')->toArray();
        return view('welcome', compact('products'));
    }

    public function categoryWiseProducts($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->paginate(12);
        // $categories = Category::pluck('title', 'slug')->toArray();
        return view('category_wise_products', compact('products'));
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

    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        // dd($product);
        // $categories = Category::pluck('title', 'slug')->toArray();
        return view('product-details', compact('product'));
    }
}
