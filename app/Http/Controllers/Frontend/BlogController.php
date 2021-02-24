<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.frontend.blog');
    }

    public function show()
    {
        return view('pages.frontend.single-blog');
    }
}
