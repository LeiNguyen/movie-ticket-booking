<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Lấy danh sách phim
        return view('home', compact('movies'));
    }
}
