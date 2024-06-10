@extends("template3")
@section("title","Личный кабинет")
@section('content')

<div class="container">
    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 13.svg" alt="Your Image"  >  -->

    @guest()
    <a href="{{route('loginForm') }}">Войти</a>
    <a href="{{route('registr.form')}}">Регистрация</a>
    @endguest
    @auth()
    <div class="kno">
        <a href="{{ route('user') }}">Домой</a>

        <a class="btn" href="{{ route('pets') }}">Животные</a>

        <a class="btn" href="{{ route('mi') }}">Мы</a>




        <div class="kno1">
            <a class="btn" href="{{ route('logout') }}">Выйти</a>
        </div>
    </div>
</div>







@endauth
<h1>Привет,<a>{{ Auth::user()->name }}</a> ! Вот все твои питомцы!</h1>




<!-- о нас -->
<div class="mi">
    <div class="mi1">
        <h5>"Лапа Помощи" основана в <a>2010 году</a> небольшой группой энтузиастов, которые решили изменить судьбу животных
            в нашем регионе.
        </h5>
    </div>

    <div class="mi2">
        <h5>С тех пор наша организация росла и развивалась, благодаря поддержке сообщества и наших покровителей.
        </h5>
    </div>
</div>



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<!-- <p>В этой таблице собраны все животные, которых ты приютил</p> -->


<!-- таблица всех животных -->
<div class="vs">
    <div class="tab">
        <img src="http://localhost/lapa_pomoshci/public/img/Group 14.svg" alt="Your Image">
        <div class="pm">

            <table class="table" width="100%" border="2">

                <thead>
                    <tr>
                        <th>
                            <h2>Имя</h2>
                        </th>

                        <th>
                            <h2>Дата рождения</h2>
                        </th>

                        <th>
                            <h2>Cтатус</h2>
                        </th>


                    </tr>


                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <!-- <ul> -->
                    <tr>
                        @foreach($pets as $pet)
                        <form action="status" method="get">
                            @csrf
                            <td> {{$pet->pet->name}}</td>
                            <td> {{$pet->teame}}</td>
                            <td> @if($pet->pet->statysp=="забрать")
                                Забрали навсегда
                                @else
                                {{$pet->status}}
                                @endif
                            </td>
                            <!-- </li> -->
                    </tr>


                    </form>
                    @endforeach
                </thead>
            </table>

            <!-- </ul> -->
        </div>

    </div>

    <div class="pamt">
        <img src="http://localhost/lapa_pomoshci/public/img/Group 15 (1).svg" alt="dog">


    </div>
    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 1 (1).svg" alt="dog"> -->




</div>
<br>
<br>
<br>
<br>
<br>




</div>
</div>

<!-- подвал -->
<div class="footer">
    <div id="block5">
        <h3>Мы находимся по адрессу: </h3>
        <p>Проспект Победы 63</p>
    </div>


    <div id="block6">
        <h3>Наш телефон</h3>
        <p>8 982 (306) 35-93.</p>
    </div>

</div>


<!-- стили -->

<style>
    img {
        display: flex;
        justify-content: center;
    }

    /* кнопки меню */
    .kno {
        display: flex;
        justify-content: center;
        gap: 10px;

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
        width: 100%;



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

    /* о нас */
    .mi {

        display: flex;
        justify-content: space-between;
        display: flex;
        width: 100%;
    }

    .mi1 {

        display: flex;
        justify-content: space-between;
        display: flex;
        width: 20%;
    }

    .mi1 h5 {


        text-align: center;
        font-size: small;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        color: black;
        /* margin-top: 32px; */
    }

    .mi1 a {
        background-color: #00A81B;
        color: #F3F3F3;
        border-radius: 100px;
    }

    .mi2 {
        width: 20%;

        background-color: white;
        border: solid 3px #00A81B;
        color: white;
        border-radius: 100px;
    }

    .mi2 h5 {


        text-align: center;
        font-size: small;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        color: #00A81B;
        /* margin-top: 32px; */
    }


    /* текст сверху */
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

    /* подпись к таблице */
    /* p {
        display: flex;
        flex-direction: column;
        width: 20%;

        font-size: medium;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
    } */


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

    .vs {
        display: flex;
        width: 100%;
        justify-content: space-around;
        margin-top: 10px;

    }

    .pm {
        display: flex;
        width: 100%;

    }

    .tab {
        display: flex;
        flex-direction: column;
    }


    .tab img {
        display: flex;
        height: 300px;
        width: 100%;
        /* align-content: flex-start; */
    }

    .pamt {
        display: flex;


    }

    .pamt img {
        display: flex;
        width: 100%;
        height: 600px;


    }


    /* подвал */
    .footer {
        display: flex;
        justify-content: center;
        text-align: center;
        background-color: #F3F3F3;
        position: fixed;
        bottom: 0;
        border-radius: 10%;
        /* margin-left: 23%; */
        width: 100%;
        height: 80px;
    }

    #block5 {
        float: left;
        display: block;
        width: 300px;
        margin: 2px;
    }

    #block6 {
        float: left;
        display: block;
        width: 300px;
        margin: 2px;
    }

    #block5 h3 {
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        ;
        color: black;
    }

    #block5 p {
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        ;
        color: black;
    }

    #block6 h3 {
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        ;
        color: black;
    }

    #block6 p {
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        ;
        color: black;
    }
</style>

@endsection