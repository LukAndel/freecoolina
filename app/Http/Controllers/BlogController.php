<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use App\Models\About;

class BlogController extends Controller
{
    public function display()
    {
        $articles = Article::latest()->paginate(5);
        $images = Image::all();

        return view('blog/blog', compact('articles', 'images'));
    }

    public function displayCategory($name)
    {
        $category = Category::where('name', $name)->first();
        $articles = Article::all();
        $images = Image::all();

                
        return view('blog/category', compact('articles', 'images', 'category'));
    }

    public function displayAboutMe()
    {
        $about = About::where('id', 1)->first();

        return view('blog/about-me', compact('about'));
    }

    public function displayGalery()
    {
        return view('blog/galery');
    }

    public function displayContact()
    {
        return view('blog/contact');
    }

    // public function navigation()
    // {
    //     $categories = Category::all();
    //     dd($categories);

    //     return view('blog/layout/layout', compact('categories'));
    // }

}
