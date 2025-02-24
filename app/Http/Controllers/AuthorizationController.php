<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use App\Models\Comments;
use Illuminate\Http\Request;
class AuthorizationController extends Controller
{
    public function Authorization()
    {

        return view('authorization.logIn');
//        return view('front.popular',compact('popular_articles'));

    }
}
