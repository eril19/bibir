<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HappyBookStoreController extends Controller
{
    public function main(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->get();

        return view('Home', ['nilai' => $nilai]);
    }

    public function horror(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','1')
        ->get();

        return view('horror', ['nilai' => $nilai]);
    }

    public function romance(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','2')
        ->get();

        return view('romance', ['nilai' => $nilai]);
    }

    public function scifi(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','3')
        ->get();

        return view('scifi', ['nilai' => $nilai]);
    }

    public function mystery(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','4')
        ->get();

        return view('mystery',['nilai' => $nilai]);
    }

    public function thriller(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','5')
        ->get();

        return view('thriller',['nilai' => $nilai]);
    }

    public function action(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','6')
        ->get();

        return view('action', ['nilai' => $nilai]);
    }

    public function comedy(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','7')
        ->get();

        return view('comedy', ['nilai' => $nilai]);
    }

    public function drama(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','8')
        ->get();

        return view('Home',['nilai' => $nilai]);
    }

    public function history(){
        $nilai = DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','9')
        ->get();

        return view('history', ['nilai' => $nilai]);
    }

    public function fantasy(){
        $nilai= DB::table('books')
        
        ->join('details', 'book_id', '=', 'details.book_id')
        ->where('books.category_id','10')
        ->get();

        return view('fantasy', ['nilai' => $nilai]);
    }


}
