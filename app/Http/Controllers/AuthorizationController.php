<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use App\Models\Comments;
use GuzzleHttp\Psr7\ServerRequest;
use http\Client\Curl\User;
use Illuminate\Http\Request;


class AuthorizationController extends Controller
{
    public FrontController $frontController;

    public function Authorization()
    {

        return view('authorization.logIn');
//        return view('front.popular',compact('popular_articles'));

    }


    public function Registration()
    {

        return view('authorization.registration');
//        return view('front.popular',compact('popular_articles'));

    }

    public function LogToAcc(ServerRequest $request)
    {

        $user = $request->getParsedBody();
        dd($user);
        if(isset($user['submit']))
        {
            $this->goUrl('/');
        }
        else
        {
            $this->goUrl('/registration');
        }


    }

}
