<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class UploadController extends Controller
{
    public function display()
    {
        $images= Image::all()->sortByDesc('created_at');

        return view('admin/upload', compact('images'));
    }

    public function save(Request $request)
    {
        $data= new Image();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
    
        return redirect()->route('upload')->with('status', 'Image(s) Has been uploaded');
    }

    public function delete($id)
    {
        $image = Image::where('id', $id)->first();
        $image->delete();

        return redirect()->route('upload');
    }
}

