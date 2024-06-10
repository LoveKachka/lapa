@extends("template")
@section("title","Вход в кабинет")
@section('content')


<div class="left">
    <div class="vh">
        <h1>Добро пожаловать в приют для животных <br><a>Лапа помощи</a>!</h1>
    </div>
    <img src="http://localhost/lapa_pomoshci/public/img/Group 2.svg" alt="dog">
</div>
<div class="right">
    <img src="http://localhost/lapa_pomoshci/public/img/Group.svg" alt="logo">
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

        <form action="{{route('login')}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" class="input" value="{{ old('login') }}" placeholder="Ваше имя">
                @error('login')
                <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                <input type="password" class="input" name="password" value="{{old('password')}}" placeholder="Пароль">
                @error('password')
                <small>{{ $message }}</small>
                @enderror
            </div>
            <button class="btn">Войти</button>
        </form>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #000;
            background-color: #ffffff;
        }

        * {
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            font-size: 40px;
            font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
            color: black;
            /* margin-top: 32px; */
        }

        h1 a {
            background-color: #00A81B;
            color: white;
            border-radius: 100px;

        }


        .form {
            max-width: 320px;
            padding: 15px;
            margin: 20px auto;
            background-color: #fff;
        }

        .input {
            display: block;
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 10px;

            border: 1px solid #1cbc11;

            font-family: inherit;
            font-size: 16px;
            border-radius: 20px;

        }

        .btn {
            display: block;
            width: 100%;
            padding: 8px 10px;

            border: 0;
            background-color: #17ae0c;
            cursor: pointer;

            font-family: inherit;
            font-size: 16px;
            color: #fff;
            border-radius: 20px;
            font-weight: 900;

        }

        .btn:hover {
            background-color: #14a20a;
        }
    </style>
    @endsection