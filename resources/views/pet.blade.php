@extends("template")
@section("title","наши животные")
@section('content')
<div class="container">
    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 12.svg" alt="dog"> -->

    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 17 (2).svg" alt="dog"> -->

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

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <h1>Наши <a>животные</a></h1>



    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <ul>

        <form action="{{route('status')}}" method="get">
            @csrf


            <img src="{{asset('storage')}}/{{$pet->foto}}" alt="{{$pet->name}}">
            <table class="table" width="100%" border="2">
                <thead>
                    <thead>
                        <tr>
                            <th>
                                <h2>Имя</h2>
                            </th>

                            <th>
                                <h2>Вид</h2>
                            </th>

                            <th>
                                <h2>Пол</h2>
                            </th>
                            <th>
                                <h2> Дата рождения </h2>
                            </th>
                            <th>
                                <h2>Вес</h2>
                            </th>
                            <th>
                                <h2>Описание</h2>
                            </th>

                        </tr>


                        <tr>

                            <td>{{$pet->name}}</a></td>
                            <td> {{$pet->view}}</td>
                            <td> {{$pet->sex}}</td>
                            <td> {{$pet->age}}</td>
                            <td> {{$pet->weight}}</td>
                            <td>{{$pet->description}}
                                <input type="hidden" name="pet_id" value="{{$pet->id}}">
                            </td>
                        </tr>
                    </thead>
            </table>
            <!-- <p>{{$pet->name}}</p>

                <p> {{$pet->view}}</p>
                <p> {{$pet->sex}}</p>
                <p> {{$pet->age}}</p>
                <p>{{$pet->weight}}</p>
                <p> {{$pet->description}}</p> -->
            <div class="osn">
                <select name="statysp" id="">
                    <option value="забрать">Взять навсегда</option>
                    <option value="передержка">Передержка</option>
                </select>
                <input type="hidden" name="pet_id" value="{{$pet->id}}">
                <button type="submit">Подтвердить</button>
            </div>
        </form>


    </ul>
</div>

<!-- стили -->
<style>
    body .container {
        width: 100%;
    }

    /* картинка */


    img {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 250px;
        margin-top: 10px;
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

    /* кнопки */
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
        width: 100%;

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


    button {
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

    button:hover {
        background: rgba(0, 0, 0, 0);
        color: #00A81B;
        box-shadow: inset 0 0 0 3px #00A81B;
    }


    .osn {
        display: flex;
        justify-content: center;
    }


    select {
        background-color: white;
        border-color: #00A81B;
        color: black;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 30px;
        width: 200px;
        height: 35px;
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

    /* li {
            text-align: center;
            font-size: larger;
            font-family: 'Inria Serif', sans-serif;
            color: black;
            margin-top: 32px;
            width: 100%;
        } */
</style>

</div>
@endsection