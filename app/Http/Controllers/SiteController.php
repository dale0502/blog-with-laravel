<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //app\Http\Controllers\SiteController.php
    public function renderBlogPage(){
        return view('blog');
    }
    
    public function renderPostPage(){
        return view('post');
    }
}
