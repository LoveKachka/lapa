<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function store(Request $request)
    {

        

        $request->validate([
           
            'pet_id' => 'required',
            'statysp' => 'required'
        ]);

        $date=date("Y-m-d");
        $user=Auth::user();

       $status= Status::create(['user_id'=>$user->id, 'pet_id'=>$request->pet_id, 'teame' => $date,'status'=>$request->statysp]);
       $pet=Pet::where('id', $status->pet_id)->first();
   $pet->status=1;
       
        $pet->statysp = $request->statysp;
   $pet->save();
           return back()->with('success','заявка принята');
     
    }

}
