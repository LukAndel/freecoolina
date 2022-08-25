<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyWorkController extends Controller
{
    public function display()
    {
        return view('admin/my-work');
    }
}
