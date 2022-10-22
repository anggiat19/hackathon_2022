<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {

     $pembayarns = Pembayaran::all();
     return view('pembayaran',['pembayarans'=>$pembayarns]);



     // return view('produks');


    }

}