<?php

namespace App\Http\Controllers;

use App\Http\Resources\Petresource;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetApiController extends Controller
{
    //вывод всех питомцев
    public function index(){
      //  return pet::all();
        return Petresource::collection(Pet::all());
    }
    public function show (Pet $pet)
    {
        return $pet;
    }
    //поиск
    public function search(Request $request)
{
$query = $request->get('query');
$pet=Pet::where('name','LIKE',"%$query%")
->get();
return Petresource::collection($pet);
}
//добавление
    public function store(Request $request)
    {
        $request->validate([
            'view' => 'required',
            'sex' => 'required|in:м,ж',
            'age' => 'required|date',
            'weight' => 'required|numeric',
            'name' => 'required'

        ]);
        $pet = Pet::create($request->all());

        return response()->json([
            'id' => $pet->id,
            'message' => 'Gbnjvt создана'
        ], 201);
    }
}
