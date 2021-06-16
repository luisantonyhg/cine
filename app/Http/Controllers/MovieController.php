<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function index()
    {
        $movies = DB::table('movies')->paginate(2);
        return view('movies.index', compact('movies'));
    }


    public function create()
    {
        return view('movies.create');
    }


    public function store(Request $request)
    {
        Movie::create($request->all());
        return redirect()->route('movies.index');
    }


    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }


    public function update(Request $request, Movie $movie)
    {
        $request->validate(
            [
                'name'      => 'required',
                'synopsis'  => '',
                'director'  => 'required',
                'genre'     => 'required',
                'duration'  => 'required',
                'available' => 'required'
            ]
        );

        $movie->update($request->all());

        return redirect()->route('movies.index');
    }


    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }

    // Crear función para vista en forma tabular
    public function viewTable()
    {
        $movies = DB::table('movies')->paginate(10);
        return view('movies.viewTable', compact('movies'));
    }

}
