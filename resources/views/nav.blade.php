@guest()
    <a href="{{route('loginForm') }}">Войти</a>
    <a href="{{route('registr.form')}}">Регистрация</a>
@endguest
@auth()
    <a href="{{ route('logout') }}">Выйти</a>
@endauth
