<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cd;
use App\Models\Jurnal;
use App\Models\Skripsi;
use App\Models\Koran;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function showBooks()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function showCds()
    {
        $cds = Cd::all();
        return view('cds.index', compact('cds'));
    }

    public function showJurnals()
    {
        $jurnals = Jurnal::all();
        return view('jurnals.index', compact('jurnals'));
    }

    public function showSkripsis()
    {
        $skripsis = Skripsi::all();
        return view('skripsis.index', compact('skripsis'));
    }

    public function showKorans()
    {
        $korans = Koran::all();
        return view('korans.index', compact('korans'));
    }
}
