@extends('authorization.authorization')


@section('authorization')
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="/login">Вход</a>
    </li>
    <li class="nav-item">
        <a  class="nav-link active" data-toggle="tab" href="/registration">Регистрация</a>
    </li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade" id="login">

        </div>

        <div  class="tab-pane fade show active" id="registration">
            <div class="card-body">
                <h3 class="card-title">Регистрация</h3>
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
                        <input type="password" placeholder="Повторите пароль" name="twopassword" style="margin-top: 10px; margin-bottom: 10px">
                    </div>


                    <input class="btn btn-outline-danger3 w-100" type="submit" value="Зарегистрироваться" name="submit" style="margin-top: 10px; margin-right: 5px">
                </form>
            </div>
        </div>
    </div>

@endsection
