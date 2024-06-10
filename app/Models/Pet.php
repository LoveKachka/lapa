<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable=['view','sex','age','weight','name', 'description','foto'];
    public $timestamps=false;

    

    public function status()
    {
        return $this->hasMany(Status::class);
    }
}
