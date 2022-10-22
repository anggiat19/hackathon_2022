<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
            $produks = Produk::count();
            // $category = Category::count();
            // $userCount = User::count();
           return view('dashboard',[
            'produks' => $produks,
            // 'category_count'=>$category,
            // 'user_count'=>$userCount

        ]);
    }
}