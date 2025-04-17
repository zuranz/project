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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
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

//        $credentials = $request->validate([
//            'email' => ['required', 'login'],
//            'password' => ['required'],
//        ]);
//        if (Auth::attempt($credentials)) {
//
//            if (Auth::check()) {
//                return redirect()->route('front.index');
//            }
//
//            $request->session()->regenerate();
//
//            return redirect()->route('front.index');
//        }
//
//        return back()->withErrors([
//            'email' => 'Предоставленные учетные данные не соответствуют нашим записям.',
//        ])->onlyInput('email');



        if(isset($user['submit']))
        {
            if($user['login'] != null && $user['password'] != null)
            {
                $authUser = User::where('email','=', $user['login'])->first()   ;


//                dd($authUser);
                if($authUser != null && Hash::check($user['password'], $authUser->password))
                {
                    Session::put('user', $authUser);
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


    public function RegistrAcc(Request $request)
    {

        $user = $request;
        if(isset($user['submit']))
        {
            if($user['login'] != null && $user['password'] != null && $user['twopassword'] == $user['password'] && $user['name'] != null)
            {
//                $registrUser = User::create([
//                    'email' => $user['login'],
//                    'username' => $user['name'],
//                    'password' => Hash::make($user['password']),
//                    'remember_token' => Str::random(10)
//
//                ]);
                DB::table('users')->insert([
                    'email' => $user['login'],
                    'username' => $user['name'],
                    'password' => Hash::make($user['password']),
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'email_verified_at' => now()
                ]);
                $registrUser = User::where('email','=', $user['login'])->first()   ;

//                dd($authUser);

                    Session::put('user', $registrUser);
                    return redirect()->route('front.index');

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


    function OutAccount()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('front.index');
    }


    public function AuthUser(User $user)
    {
        return $user->isAuth;
    }

}
