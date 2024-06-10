@extends("template")
@section("title","Создание питомца")
@section("content")
@if ($errors->any())
<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="kno1">
    <a href="{{ route('admin') }}">Все животные</a>
</div>

<form action="{{ route('pet.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <label for="inputName" class="col-md-2 col-form-label">вид</label>
        <div class="col-md-10">
            <input type="text" " class=" form-control" id="inputName" name="view">
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputCena" class="col-md-2 col-form-label">пол</label>
        <div class="col-md-10">
            <input type="text" class="form-control" id="inputCena" name="sex">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputKol" class="col-md-2 col-form-label">возраст</label>
        <div class="col-md-10">
            <input type="date" class="form-control" id="inputKol" name="age">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputSrok" class="col-md-addPetForm2 col-form-label">вес</label>
        <div class="col-md-10">
            <input type="number" class="form-control" id="inputAge" name="weight" min="0" step="0.1">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputSrok" class="col-md-2 col-form-label">имя</label>
        <div class="col-md-10">
            <input type="text" class="form-control" id="inputSrok" name="name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-md-2 col-form-label">Описание</label>
        <div class="col-md-10">
            <textarea name="description" id="inputSrok" cols="25" rows="5"></textarea>

        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-md-2 col-form-label">Фото</label>
        <div class="col-md-10">
            <input type="file" class="form-control" id="inputSrok" name="foto">
        </div>
    </div>


    <div class="kno">

        <button type="submit" class="btn btn-primary">Добавить питомца</button>
    </div>
</form>
<style>
    body {
        width: 100%;
        display: block;

    }


    .kno1 {
        display: flex;
        justify-content: end;
    }



  

    /* кнопки меню */
    a {
        display: inline;
        align-items: center;
        padding: 8px 2px;


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




    a:hover {
        background: rgba(0, 0, 0, 0);
        color: #00A81B;
        box-shadow: inset 0 0 0 3px #00A81B;
    }


    label {
        /* text-align: center;
        font-size: large;
        font-family: 'Inria Serif', sans-serif;
        color: #00580E;
        margin-top: 32px; */
        display: flex;
        justify-content: center;
        text-align: center;
        font-size: 35px;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        color: black;
    }

    input {
        display: flex;
        justify-content: center;
        width: 100%;
        background-color: white;
        /* border: none; */
        border-color: #00A81B;
        color: black;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        text-align: center;
        text-decoration: none;
        /* display: inline-block; */
        font-size: 16px;
        border-radius: 30px;
        width: 100%;
    }

    textarea {
        display: flex;
        justify-content: center;
        width: 100%;
        background-color: white;
        /* border: none; */
        border-color: #00A81B;
        color: black;
        font-family: "Unbounded", "TT NORMS PRO", "Trebuchet MS", sans-serif;
        text-align: center;
        text-decoration: none;
        /* display: inline-block; */
        font-size: 16px;
        border-radius: 30px;
        width: 100%;
    }

    button {
        display: flex;
        justify-content: space-evenly;
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

    .kno {
        display: flex;
        justify-content: center;
        padding: 10px;
    }
</style>
<php>
</php>
@endsection