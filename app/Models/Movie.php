<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
   public function index(){
    $movies = Movie::all();
    dd($movies);
    return view('home');
   }
}
