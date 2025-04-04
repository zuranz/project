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
use function Laravel\Prompts\password;


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

        $credentials = $request->validate([
            'email' => ['required', 'login'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            if (Auth::check()) {
                return redirect()->route('front.index');
            }

            $request->session()->regenerate();

            return redirect()->route('front.index');
        }

        return back()->withErrors([
            'email' => 'Предоставленные учетные данные не соответствуют нашим записям.',
        ])->onlyInput('email');



        if(isset($user['submit']))
        {
            if($user['login'] != null && $user['password'] != null)
            {
                $authUser = User::where('email','=', $user['login'])->where('password','=', $user['password'])->first()   ;

//                dd($authUser);
                if($authUser != null)
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
