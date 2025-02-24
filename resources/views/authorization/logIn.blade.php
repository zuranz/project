@extends('authorization.authorization')


@section('authorization')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="/login">Вход</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="/registration">Регистрация</a>
    </li>

</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="login">
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
                <a href="/password_reset" style="margin-top: 25px">Забыли пароль?</a>

                <input class="btn btn-outline-danger3 w-100" type="submit" value="Войти" name="submit" style="margin-top: 10px; margin-right: 5px">
            </form>
        </div>
    </div>

    <div class="tab-pane fade" id="registration">
        Характеристики товара...
    </div>
</div>
@endsection
