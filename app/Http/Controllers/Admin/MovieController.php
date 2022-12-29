<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MovieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isAdmin');

        $this->middleware(function ($request, $next) {
            if (session('success')) {
                Alert::success(session('success'));
            }

            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard-admin.movie.index', [
            'movies' => Movie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.movie.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'trailer' => 'required|max:255',
            'synopsis' => 'required|max:255',
            'poster' => 'image|file|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required',
        ]);

        if ($request->file('poster')) {
            $validatedData['poster'] = $request->file('poster')->store('movie-images');
        }

        Movie::create($validatedData);

        return redirect('/dashboard-admin/movies')->with('success', 'New movie has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie, Category $category)
    {
        return view('dashboard-admin.movie.show', [
            'category' => $category,
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('dashboard-admin.movie.edit', [
            'movie' => $movie,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $rules = [
            'name' => 'required|max:255',
            'trailer' => 'required|max:255',
            'synopsis' => 'required|max:255',
            'poster' => 'image|file|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('poster')) {
            if ($request->oldPoster) {
                Storage::delete($request->oldPoster);
            }
            $validatedData['poster'] = $request->file('poster')->store('movie-images');
        }

        Movie::where('id', $movie->id)->update($validatedData);

        return redirect('/dashboard-admin/movies')->with('success', 'Movie has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        if ($movie->poster) {
            Storage::delete($movie->poster);
        }
        Movie::destroy($movie->id);

        return redirect('/dashboard-admin/movies')->with('success', 'Movie has been deleted!');
    }
}
