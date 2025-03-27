@extends('authorization.authorization')


@section('auth')
{{--    <ul class="nav nav-tabs">--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" data-toggle="tab" href="/authorization">Вход</a>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--        <a  class="nav-link active" data-toggle="tab" href="/registration">Регистрация</a>--}}
{{--    </li>--}}

{{--    </ul>--}}
{{--    <div class="tab-content">--}}
{{--        <div class="tab-pane fade" id="login">--}}

{{--        </div>--}}

{{--        <div  class="tab-pane fade show active" id="registration">--}}
{{--            <div class="card-body">--}}
{{--                <h3 class="card-title">Регистрация</h3>--}}
{{--                <form action="/accountregistr" method="POST">--}}

{{--                    <div class="text-input">--}}
{{--                <span class="icon begin">--}}
{{--                    <i class="fas fa-user"></i>--}}
{{--                </span>--}}
{{--                        <input type="text" placeholder="Введите логин" name="login"  style="margin-top: 20px">--}}
{{--                    </div>--}}
{{--                    <div class="text-input">--}}
{{--                <span class="icon begin">--}}
{{--                    <i class="fas fa-lock"></i>--}}
{{--                </span>--}}
{{--                        <input type="password" placeholder="Придумайте пароль" name="password"  style="margin-top: 10px;">--}}
{{--                        <input type="password" placeholder="Повторите пароль" name="twopassword" style="margin-top: 10px; margin-bottom: 10px">--}}
{{--                    </div>--}}


{{--                    <input class="btn btn-outline-danger w-100" type="submit" value="Зарегистрироваться" name="submit" style="margin-top: 10px; margin-right: 5px">--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}






<div class="card" style="width: 30%; margin-top: 10%; margin-left: 33%; margin-bottom: 10%; height: 33% ">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " data-bs-toggle="tab" href="/authorization">Вход</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="/registration">Регитрация</a>
        </li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content" >
        <div class="tab-pane container fade " id="home" style="width: 100%; margin-top: 2%">
            <div  >
                <div class="card-body">
                    <h3 class="card-title">Вход в аккаунт</h3>
                    <form action="/toaccount" method="post">

                        <div class="text-input">
                <span class="icon begin">
                    <i class="fas fa-user"></i>
                </span>
                            <input type="text" placeholder="Ваш логин" name="login" style="margin-top: 20px">
                        </div>
                        <div class="text-input">
                <span class="icon begin">
                    <i class="fas fa-lock"></i>
                </span>
                            <input type="password" placeholder="Ваш пароль" name="password" style="margin-top: 10px; margin-bottom: 10px">
                        </div>
                        {{--                        <a href="/password_reset" style="margin-top: 25px">Забыли пароль?</a>--}}
                        <div class="newsletterlog">
                            {{--                            <input type="submit" value="Login" style="width: 100px">--}}
                            <input  type="submit" value="Войти" name="submit" style=" width: 30%">
                        </div>


                    </form>
                </div>
            </div>
        </div>

{{--   Active  --}}
        <div class="tab-pane container active" id="menu1" style="width: 100%; margin-top: 2%">
            <div class="card-body">
                <h3 class="card-title" style="color: #84754e;">Регистрация</h3>
                <form action="/accountregistr" method="POST">

                    <div class="text-input">
                <span class="icon begin">
                    <i class="fas fa-user"></i>
                </span>
                        <input type="text" placeholder="Введите логин" name="login"  style="margin-top: 20px">
                    </div>
                    <div class="text-input">
                <span class="icon begin">
                    <i class="fas fa-lock"></i>
                </span>
                        <input type="password" placeholder="Придумайте пароль" name="password"  style="margin-top: 10px;">

                    </div>
                    <div class="text-input">
                <span class="icon begin">
                    <i class="fas fa-lock"></i>
                </span>

                        <input type="password" placeholder="Повторите пароль" name="twopassword" style="margin-top: 10px; margin-bottom: 10px">
                    </div>



                    <div class="newsletterlog">
                        {{--                            <input type="submit" value="Login" style="width: 100px">--}}
                        <input  type="submit" value="Войти" name="submit" style=" width: 30%; margin-bottom: 10px">
                    </div>
                </form>
            </div>
            </div>

    </div>
</div>

@endsection
