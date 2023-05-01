<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::latest()->paginate(8);
        return view('movies.index', ['movies'=> $movies]);
    }

    public function show($id){
        $movie = Movie::where('id', $id)->first();
        return view('movies.show', ['movie'=> $movie]);
    }
}
