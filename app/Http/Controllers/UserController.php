<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
      //  return "регистрация";
        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:users|min:11|max:11',
            'password' => 'required'
        ]);
        $password =Hash::make($request->password);
        User::create(['password' => $password] + $request->all());
        Auth::attempt($request->only(['name', 'password']));
        $user = Auth::user();
        return redirect('/user')->with('success','Пользователь успешно добавлен');
    }
    public function loginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'password' =>'required'
        ]);

        if (Auth::attempt($request->only(['name', 'password']))) {

            $user = Auth::user();
           

           if ($user->role == "admin")         return redirect('/admin');
           if ($user->role == 'user')             return redirect('/user');
        }
        return back()->withErrors([
            'login' => 'Login or password incorrect'
        ]);


    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function user()
    {
     $pets=Status::with('pet')->where('user_id',Auth::id())->get();//вывод всех записей из таблиц
        return view('user',['pets'=>$pets]);
    }

    public function admin()
    {

        $pets = Pet::all();//вывод всех записей из таблиц

    $pets_pr = Status::with('user','pet')->get();//вывод всех записей из таблиц
        return view('admin', ['pets' => $pets, 'pets_pr' => $pets_pr]);
    }

}
