<?php

namespace App\Http\Controllers;

use App\Models\Desk_pemesanan;
use Illuminate\Http\Request;

class Desk_pemesananController extends Controller
{
    public function index()
   {

    $pemesanans = Desk_pemesanan::all();
    return view('pemesanan',['pemesanans'=>$pemesanans]);



    // return view('produks');


   }
}