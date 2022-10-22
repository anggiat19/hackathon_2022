<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
   {

    $produks = Produk::all();
    return view('produks',['produks'=>$produks]);



    // return view('produks');


   }

//    public function add()
//    {

//     $categoris = Category::all();
//     return view('book-add',['categories'=>$categoris]);
//    }
   public function add()
    {

        return view('produk-add');
    }

   public function store(Request $request)

   {

    // $validated = $request->validate([
    //     'book_code' => 'required|unique:books|max:255',
    //     'title' => 'required|max:255'

    // ]);
        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover',$newName);
        }

            $request['cover'] = $newName;
            $book = Produk::create($request->all());
            // $book->categories()->sync($request->categories);
            return redirect('produks')->with('status', 'Book Added Successfully');
   }

//    public function edit($slug)
//    {
//         $books = Book::where('slug',$slug)->first();
//         $categoris = Category::all();
//         return view('book-edit',['categories'=>$categoris,'book'=>$books]);
//    }

//    public function update(Request $request, $slug)
//    {
//     // $newName = '';
//     // $choosenCategories = '';
//         if($request->file('image')){
//             $extension = $request->file('image')->getClientOriginalExtension();
//             $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
//             $request->file('image')->storeAs('cover',$newName);
//             $request['cover'] = $newName;
//         }





//         $book = Book::where('slug',$slug)->first();
//         $book->update($request->all());

//         if($request->categories){
//             $book->categories()->sync($request->categories);
//         }
//         return redirect('books')->with('status', 'Book Updated Successfully');

//    }

//    public function delete($slug)
//    {
//         $book = Book::where('slug',$slug)->first();
//         return view('book-deleted',['book'=>$book]);
//    }

//    public function destroy($slug)
//    {
//     $book = Book::where('slug',$slug)->first();
//     $book->delete();
//     return redirect('books')->with('status', 'Book Deleted Successfully');
//    }


//    public function deletedBook()
//    {
//     $deletedBooks = Book::onlyTrashed()->get();
//     return view('book-deleted-list',['deletedbook'=>$deletedBooks]);
//    }

//    public function restore($slug)
//    {
//     $book = Book::withTrashed()->where('slug',$slug)->first();
//     $book->restore();
//     return redirect('books')->with('status', 'Book Restored Successfully');
//    }
}