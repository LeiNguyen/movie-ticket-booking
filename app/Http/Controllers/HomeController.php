<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        
        $movies = Movie::all(); // Lấy danh sách phim
        return view('home', [
            'movies' => $movies,
            'user' => $user
        ]);
    }
}
