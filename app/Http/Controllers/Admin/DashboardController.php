<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Genre;

class DashboardController extends Controller
{
     public function index()
    {
        $title = 'Admin Panel';
        $statistics = [
            'totalUsers' => User::count(),
            'totalMovies' => Movie::count(),
            'totalGenres' => Genre::count(),
            'totalMoviesWatched' => 0,

        ];

        $movies = Movie::latest()->take(5)->get(['id', 'name']);



        return view('admin.dashboard.index', compact('title', 'statistics', 'movies'));
    }
}
