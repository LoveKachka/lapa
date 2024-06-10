@extends("template")
@section("title","Личный кабинет")
@section('content')

<div class="container">


    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 12.svg" alt="dog"> -->


    <div class="kno">
        <a href="{{route('pet.create')}}">Добавить питомца</a>
        @guest()
        <a href="{{route('loginForm') }}">Войти</a>
        <a href="{{route('registr.form')}}">Регистрация</a>
        @endguest
        @auth()
        <div class="kno1">
            <a href="{{ route('logout') }}">Выйти</a>
        </div>
        @endauth
    </div>
    <h1>Привет, <a>{{ Auth::user()->name }}</a>!</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif





    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="spis">
        <div class="sv">
            <h2>Свободны</h2>
            <ul>
                @foreach($pets as $pet)
                @if($pet->status=='0')

                <li> {{$pet->name}} {{$pet->view}}

                </li>
                <!-- {{$pet->id}} (вырезала из "свободны")-->
                @endif
                @endforeach

            </ul>
        </div>
        <div class="pr">
            <h2>Пристроены</h2>
            <table class="table" width="100%" border="2">
                <thead>
                    <thead>
                        <tr>
                            <th>
                                <h2>Имя животного</h2>
                            </th>

                            <th>
                                <h2>Статус</h2>
                            </th>

                            <th>
                                <h2>Имя владельца</h2>
                            </th>


                        </tr>



                        @foreach($pets_pr as $pet)
                        <tr>

                            <td>{{$pet->pet->name}}</td>
                            <td>{{$pet->pet->statysp}}</td>
                            <td> {{$pet->user->name}}</td>
                        </tr>

                        <!-- {{$pet->pet_id}} (вырезала из "пристроены")
-->
                        @endforeach


                    </thead>
            </table>


        </div>
    </div>
</div>
</div>

<style>
    .container {
        width: 100%;
    }

    body h1 {
        text-align: center;
        font-size: 40px;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        color: black;
        margin-top: 32px;
    }

    h1 a {
        background-color: #00A81B;
        color: white;
        border-radius: 100px;

    }

    h2 {
        text-align: center;
        font-size: 35px;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        color: black;
        margin-top: 32px;
    }





    /* таблица */

    .table {
        width: 100%;
        border: none;
        margin-bottom: 20px;
        padding: 5px;

        /* border: 3px solid #00A81B;
                border-radius: 10%; */


    }



    .table thead td {
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        font-weight: bold;
        text-align: left;
        padding: 10px 15px;
        background: #F3F3F3;
        font-size: large;
        border: none;
        border-radius: 30px;

    }

    .table tbody td {

        text-align: left;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        padding: 10px 15px;
        font-size: 14px;

        vertical-align: top;
    }

    .table thead tr td:first-child,
    .table tbody tr td:first-child {
        border-left: none;
    }

    .table thead tr td:last-child,
    .table tbody tr td:last-child {
        border-right: none;
    }

    .table tbody tr:nth-child(even) {
        background: #00A81B;
    }

    .table th {
        text-align: center;
        font-size: large;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        color: black;
        border: none;
    }




    /* кнопки меню */
    .kno {
        display: flex;
        justify-content: space-around;
        gap: 10px;
        /* width: 100%; */
        /* margin-top: 1%; */
        /* margin-left: 35%; */
    }

    .kno>a {
        display: inline;
        align-items: center;
        padding: 8px 2px;


        background-color: #00A81B;
        border: none;
        color: white;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 50px;
        width: 200px;


    }




    .kno>a:hover {
        background: rgba(0, 0, 0, 0);
        color: #00A81B;
        box-shadow: inset 0 0 0 3px #00A81B;
    }

    .kno1 {
        display: flex;
        justify-content: flex-end;
        /* width: 100%; */

    }

    .kno1>a {
        display: inline;
        align-items: center;
        padding: 8px 2px;
        /* margin-left: 70px; */

        background-color: black;
        border: none;
        color: white;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 50px;
        width: 200px;


    }




    .kno1>a:hover {
        background: rgba(0, 0, 0, 0);
        color: #00A81B;
        box-shadow: inset 0 0 0 3px #00A81B;
    }


    /* таблица */

    ul {
        width: 100%;
        border: none;
        margin-bottom: 20px;
        padding: 5px;



    }

    ul li {
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        font-weight: bold;
        text-align: left;
        padding: 10px 15px;
        color: white;
        font-size: large;
        border: none;
        border-radius: 30px;
        list-style-type: none;
    }

    ul li {
        text-align: center;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        padding: 10px 15px;
        font-size: larg;
        vertical-align: top;
        background-color: #EFEFEF;
        color: black;
        margin-top: 10px;

    }

    ul li:first-child,
    ul li:first-child {
        border-left: none;
        /* background-color: #00A81B; */

    }

    ul li:last-child,
    ul li:last-child {
        border-right: none;
        /* background-color: #00A81B; */

    }

    ul li:nth-child(even)
    /* background-color: #00A81B; */


    /* картинка */
    img {
        width: 100%;
        height: 200px;
    }

    .spis {
        display: flex;
        flex-direction: column;
        width: 100%;
        justify-content: space-around;

    }

    .pr {
        width: 100%;
    }

    .sv {
        width: 100%;
    }
</style>
@endsection