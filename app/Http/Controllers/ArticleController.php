<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Image;

class ArticleController extends Controller
{
    public function display()
    {
        $isNew = true;
        $articles = Article::all();
        return view('admin/article', compact('isNew', 'articles'));
    }

    public function view($id)
    {
        $article = Article::find($id);
        $category = $article->category()->first();
        $articles = Article::all();

        $isNew = false;

        return view('admin/article', compact('article', 'category', 'isNew', 'articles'));
    }

    public function store(Request $request)
    {
        $article = new Article;

        $article->date = $request->input('date');
        $article->text = $request->input('text');
        $article->title = $request->input('title');
        $article->image_id = $request->input('image');

        if (Category::where('name', $request->input('category'))->first()) {
            $category = Category::where('name', $request->input('category'))->first();
            $article->category_id = $category->id;
        } else {
            $category = new Category;
            $category->name = $request->input('category');
            $category->save();
            $article->category_id = $category->id;
        }

        $article->save();

        return redirect()->route('article-show', [$article->id]);

    }

    public function edit(Request $request, $id)
    {
        $article = Article::where('id', $id)->first();

        $article->date = $request->input('date');
        $article->text = $request->input('text');
        $article->title = $request->input('title');
        $article->image_id = $request->input('image');

        if (Category::where('name', $request->input('category'))->first()) {
            $category = Category::where('name', $request->input('category'))->first();
            $article->category_id = $category->id;
        } else {
            $category = new Category;
            $category->name = $request->input('category');
            $category->save();
            $article->category_id = $category->id;
        }

        $article->save();

        return redirect()->route('article-show', [$article->id]);

    }

    public function show($id)
    {
        $article = Article::where('id', $id)->first();
        $category = $article->category()->first();
        $image = Image::where('id', $article->image_id)->first();

        return view('admin/article-show', compact('article', 'category', 'image'));
    }

    public function delete($id)
    {
        $article = Article::where('id',$id)->first();
        $article->delete();
        $isNew = true;

        return redirect()->route('article', compact('isNew'));
    }
}
