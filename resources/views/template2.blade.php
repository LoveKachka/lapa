<!doctype html>
<html lang="ru">



<head>
    <link rel="stylesheet" href="{{asset('css/nachalo.css')}}">
    <meta charset="utf-8" />

    <title>@yield('title')</title>

</head>

<body>


    <!-- <a href="{{ route('user') }}">Домой</a>
   
                <a href="{{ route('pets') }}">Животные</a>
         
                <a href="{{ route('mi') }}">Мы</a>
          
          <a href="{{ route('logout') }}">Выйти</a> -->



    </div>
    <!-- линия после меню -->
    <!-- <br>
    <img src="{{asset('img')}}/Line 1.png">
    <br> -->
    @yield('content')

    <!-- подвал -->
    <!-- <div class="footer">
        <div id="block5">
            <h3>Мы находимся по адрессу: </h3>
            <p>Проспект Победы 63</p>
        </div> -->

    <!-- 
        <div id="block6">
            <h3>Наш телефон</h3>
            <p>8 982 (306) 35-93.</p>
        </div>

    </div> -->
    <!-- стили css -->
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

        .right>div {
            display: row;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }
            .btn {
                /* display: block; */

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

            th {
                font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
                ;
                color: #17ae0c;

            }
    </style>

</body>

</html>