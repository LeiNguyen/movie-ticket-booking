<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    public function show($id) {
        $movie = Movie::with('showtimes')->findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}
