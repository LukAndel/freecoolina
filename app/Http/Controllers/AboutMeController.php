<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class AboutMeController extends Controller
{
    public function display()
    {
        $about = About::where('id',1)->first();

        return view('admin/about-me', compact('about'));
    }

    public function store(Request $request)
    {
        if (About::where('id',1)->first()){
        $about = About::where('id',1)->first();
        $about->text = $request->input('text');
        $about->save();
        }
        else {
        $about = new About;
        $about->text = $request->input('text');
        $about->save();
        }

        return redirect()->route('about-me');

    }
}
