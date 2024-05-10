<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $logo = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4A1lAHF22gKAv1VlARFbdxcvMgdq1qqVjOd5XJylikw&s';

        return view('home', compact('logo'));

    }
    public function newPage(){

        $logo = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4A1lAHF22gKAv1VlARFbdxcvMgdq1qqVjOd5XJylikw&s';

        $movies = Movie::all();

        return view('nuova-pagina', compact('movies', 'logo'));

    }
}
