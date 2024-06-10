@extends("template3")
@section("title","наши животные")
@section('content')
<!-- <div class="container"> -->
<div class="container">
    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 12.svg" alt="dog"> -->

    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 10 (1).svg" alt="Your Image" width="100%" height="250px"> -->

    <!-- меню -->
    <div class="kno">
        <a href="{{ route('user') }}">Домой</a>

        <a class="btn" href="{{ route('pets') }}">Животные</a>

        <a class="btn" href="{{ route('mi') }}">Мы</a>




        <div class="kno1">
            <a class="btn" href="{{ route('logout') }}">Выйти</a>
        </div>
    </div>
    <br>

    <br>
    <br>
    <div class="vh">

        <h1><a>Животные</a>, которые ищут дом!</h1>
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

    @if (session('success')) <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <!-- таблица всех животных -->


    <table class="table" width="100%" border="2">
        <thead>
            <tr>
                <th>
                    <h2>Имя</h2>
                </th>

                <th>
                    <h2>Описание</h2>
                </th>

                <th>
                    <h2>Вид</h2>
                </th>
                <th>
                    <h2> Пол </h2>
                </th>
                <th>
                    <h2>Возраст</h2>
                </th>
                <th>
                    <h2>Вес</h2>
                </th>

            </tr>
            @foreach($pets as $pet)
            <form action="status" method="get">
                @csrf
                <tr>

                    <td><a href="{{route('pet',['pet'=>$pet->id])}}"> {{$pet->name}}</a></td>
                    <td>{{$pet->description}}</td>
                    <td>{{$pet->view}}</td>
                    <td>{{$pet->sex}}</td>
                    <td> {{$pet->age}}</td>
                    <td> {{$pet->weight}}
                        <input type="hidden" name="pet_id" value="{{$pet->id}}">
                    </td>
                </tr>
            </form>
            @endforeach
        </thead>
    </table>


    <ul>


    </ul>


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
</div>
<!-- стили -->
<style>
    body

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

    /* кнопки */
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