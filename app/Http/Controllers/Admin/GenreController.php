<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
     public function index()
    {
       $title = 'Genre';

        $genres = Genre::latest()->get();

        return view('admin.genre.index', compact('title', 'genres'));
    }

      public function delete($genreId)
    {
        Genre::where('id', $genreId)->delete();
        toastr()->success('Genre has been deleted successfully!');
        return redirect()->route('admin.genre.index');
    }

        public function create()
    {
        $title = 'Create Genre';

        return view('admin.genre.create', compact('title'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:55',
            'description' => 'string',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        Genre::create($request->all());

        toastr()->success('Genre created successfully!');
        return redirect()->route('admin.genre.index');
    }

    public function edit($genreId)
    {
        $title = 'Edit Genre';
        $genre = Genre::where('id', $genreId)->first();
       
        return view('admin.genre.edit', compact('genre', 'title'));
    }

    public function update(Request $request, $genreId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:55',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $genre = Genre::where('id', $genreId)->first();

        if (!$genre) {
            toastr()->error('Genre not found.');
            return redirect()->route('admin.genre.index');
        }

        // Update the genre fields
        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();

        toastr()->success('Genre updated successfully!');
        return redirect()->route('admin.genre.index');
    }

}
