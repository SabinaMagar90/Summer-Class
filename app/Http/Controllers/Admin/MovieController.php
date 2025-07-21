<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function index()
    {
       $title = 'Movies';

        $genres = Genre::all();
        $movies = Movie::filterSearch()->filterGenre()->latest()->get();

    

        return view('admin.movies.index', compact('title', 'movies', 'genres'));
    }

    public function delete($movieId)
    {
        Movie::where('id', $movieId)->delete();
        toastr()->success('Movie has been deleted successfully!');
        return redirect()->route('admin.movies.index');
    }

    public function create()
    {
        $title = 'Create Movie';
        $genres = Genre::all();

        return view('admin.movies.create', compact('genres', 'title'));
    }

    public function store(Request $request)
    {
        // Step 1: Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:55',
            'description' => 'string',
            'duration' => 'required|numeric|min:0.1',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|min:0|max:10',
            'genre_id' => 'required|exists:genres,id',
            'language' => 'max:15',
            'cast' => 'string',
        ]);

        // Step 2: If validation fails, redirect back with errors and input
        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        // // Step 3: Create the Movie manually (not using $fillable)
        // $movie = new Movie();
        // $movie->name = $request->name;
        // $movie->description = $request->description;
        // $movie->duration = $request->duration;
        // $movie->release_date = $request->release_date;
        // $movie->rating = $request->rating;
        // $movie->genre_id = $request->genre_id;
        // $movie->language = $request->language ?? 'english'; // default if not provided
        // $movie->cast = $request->cast;
        // $movie->save();

        // Step 3: Create movie using mass assignment (fillable)
        // Movie::create($request->all());

        $data = $request->all();
        if ($request->image) {
            $imagePath = $request->file('image')->store('images', 'public');
            unset($data['image']);
            $data['image'] = 'storage/' . $imagePath;
        }

        Movie::create($data);

        // Step 4: Redirect with success message
        toastr()->success('Movie created successfully!');
        return redirect()->route('admin.movies.index');
    }

    public function edit($movieId)
    {
        $title = 'Edit Movie';
        $movie = Movie::where('id', $movieId)->first();
        $genres = Genre::all();
        return view('admin.movies.edit', compact('movie', 'genres', 'title'));
    }

    public function update(Request $request, $movieId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:55',
            'description' => 'string',
            'duration' => 'required|numeric|min:0.1',
            'release_date' => 'required|date',
            'rating' => 'required|numeric|min:0|max:10',
            'genre_id' => 'required|exists:genres,id',
            'language' => 'max:15',
            'cast' => 'string',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }

        $movie = Movie::where('id', $movieId)->first();

        $data = $request->all();
        if ($request->image) {
            $imagePath = $request->file('image')->store('images', 'public');
            unset($data['image']);
            $data['image'] = 'storage/' . $imagePath;
        }
        
        $movie->update($data);


        if (!$movie) {
            toastr()->error('Movie not found.');
            return redirect()->route('admin.movies.index');
        }

        // Mass update using fillable fields
        // $movie->update($request->all());

        toastr()->success('Movie updated successfully!');
        return redirect()->route('admin.movies.index');
    }


}
