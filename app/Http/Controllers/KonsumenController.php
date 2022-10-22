<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    public function index()
   {

    // $konsumens = Konsumen::all();
    // return view('konsumen',['konsumens'=>$konsumens]);



    return view('konsumen');


   }
}