<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use App\Models\Comments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


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

    public function LogToAcc(Request $request)
    {

        $user = $request;

        if(isset($user['submit']))
        {
            if($user['login'] != null && $user['password'] != null)
            {
                $authUser = User::where('email','=', $user['login'])->where('password','=', $user['password'])->get()   ;

//                dd($authUser);
                if($authUser)
                {
                    return redirect()->route('front.index');
                }
                else
                {
                    return redirect()->route('authorization.registration');
                }
            }
            else
            {
                return redirect()->route('front.index');
            }

//            $categories = Category::where('id', $article->category_id)->first();
        }
        else
        {
            //$this->goUrl('/registration');
            return redirect()->route('authorization.registration');

        }



    }

}
