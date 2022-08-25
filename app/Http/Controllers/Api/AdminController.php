<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use App\Models\About;

class AdminController extends Controller
{
    public function getArticles()
    {
        $articles = Article::all();

        return $articles;
    }

    public function getAbout()
    {
        $about = About::all();

        return $about;
    }

    public function getImages()
    {
        $images = Image::all();

        return $images;
    }

    public function getCategory()
    {
        $categories = Category::all();

        return $categories;
    }
}
