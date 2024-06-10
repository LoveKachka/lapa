<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>О нас</title>
</head>

<body>


  <!-- 
  <div class="verh">
    <img src="http://localhost/lapa_pomoshci/public/img/Group 12.svg" alt="dog">
  </div> -->

  <!-- <img src="http://localhost/lapa_pomoshci/public/img/Group 10 (2).svg" alt="Your Image" width="100%" height="250px"> -->


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

  </>

  <!-- кот с приветствием -->
  <div class="vh">
    <h1>Добро пожаловать в <a>приют</a> для животных <br>Лапа помощи!</h1>
  </div>

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

  </div>

  <!-- картинки описания -->
  <div class="img">


    <img src="http://localhost/lapa_pomoshci/public/img/Group 6 (1).svg" alt="dog">
    <div class="imgtext">
      <h5>Наша команда:</h5>
      <p>Мы - команда, состоящая из ветеринаров, волонтёров, координаторов по уходу за животными и людей,
        для которых благополучие наших пушистых друзей на первом месте.</p>
    </div>
    <img src="http://localhost/lapa_pomoshci/public/img/Group 7 (1).svg" alt="dog">


    <!-- <img src="http://localhost/lapa_pomoshci/public/img/Groupmi1.svg" alt="dog"> -->

  </div>
  <br>
  <br>

  <div class="eshe">
    <div class="od">
      <h3>Еще немного о нас
      </h3>
      <p>Благодаря нашим усилиям и поддержке наших сторонников,
        мы смогли помочь сотням животных найти новый дом и начать новую жизнь.
        Каждая история успеха вдохновляет нас продолжать наше дело и делать мир лучше
        для всех созданий нашей планеты.</p>
    </div>

    <div class="dv">


      <h1>Вперед! На поиски нового<br> друга! </h1>
      <a class="btn" href="{{ route('pets') }}">Животные</a>

    </div>

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>

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




  <!-- стили css -->
  <style>
    /* картинка */
    /* .verh>img {
      width: 100%;
      height: 200px;
    } */

    /* h1 {
      text-align: center;
      font-size: 48px;
      font-family: 'Inria Serif', sans-serif;
      color: #00580E;
      margin-top: 32px;
    }

    h2 {
      text-align: center;
      font-size: larger;
      font-family: 'Inria Serif', sans-serif;
      color: #00580E;
      margin-top: 32px;
    } */

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
      color: white;
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



    /* картинки о нас */


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



    .img {
      width: 100%;
      height: 300px;
      display: flex;
      justify-content: center;
      /* margin-top: 2%; */
      gap: 5%;
      padding: 5px;

    }

    .imgtext {
      width: 20%;
      border-radius: 100px;

      display: flex;
      flex-direction: column;
      background-color: #F3F3F3;


    }

    .imgtext>h5 {

      background-color: #00A81B;
      border-radius: 100px;
      /* height: 50px; */
      width: max-content;

      text-align: center;
      font-size: x-large;
      font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
      color: white;
      /* margin-top: 10px; */
    }

    .imgtext>p {
      border-radius: 20px;
      /* height: 200px; */

      text-align: center;
      font-size: larger;
      font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
      color: black;
      /* margin-top: 10px; */
    }




    /* еще немношо о нас */
    .eshe {
      /* border: #f3f3f3 solid 2px; */
      border-radius: 30px;
      display: flex;
      justify-content: space-around;
    }

    .eshe h3 {
      display: flex;

      /* justify-content: center; */
      font-size: larger;
      font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
    }





    .eshe p {

      font-size: medium;
      font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
    }

    .od {

      display: flex;
      flex-direction: column;
      width: 40%;
    }

    .eshe h1 {
      text-align: end;
      font-size: 40px;
      font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
      color: black;
    }

    .eshe a {
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

    a:hover {
      background: rgba(0, 0, 0, 0);
      color: #00A81B;
      box-shadow: inset 0 0 0 3px #00A81B;
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
  </style>
</body>

</html>