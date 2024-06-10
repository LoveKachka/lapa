<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pets = Pet::where('status','0')->get(); //вывод всех записей из таблиц
        return view('pets', ['pets' => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pet_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'sex' => 'required',
            'view' => 'required',
            'description' => 'required',
            'foto' => 'required|file|mimes:jpg,jpeg,png,svg'

        ]);

        $path=$request->foto->store('img','public');

        Pet::create(['foto'=>$path]+$request->all());
        return redirect()->route('admin')->with('success', 'Пользователь успешно добавлен');


    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        //
      
        return view('pet', ['pet' => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
