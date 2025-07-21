

@extends('admin.master')

@push('css')
<style>
    img {
        width: auto;
        height: 5rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    .top-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .search-form {
        display: flex;
        gap: 8px;
    }

    .search-input {
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        width: 250px;
    }

    .search-button {
        padding: 8px 15px;
        border: none;
        background-color: #2196F3;
        color: white;
        border-radius: 6px;
        cursor: pointer;
    }

    .search-button:hover {
        background-color: #1976D2;
    }
</style>
@endpush

@section('content')
<div class="main">
    <h2>Movies</h2><br>

    <!-- Top bar: Search + Create -->
    <div class="top-bar">
        <form action="{{ route('admin.movies.index') }}" method="GET" class="search-form">
            <input type="text" name="search" value="{{ request('search') }}" class="search-input" placeholder="Search by name or genre">
            <button type="submit" class="search-button"><i class="fa fa-search"></i> Search</button>
        </form>

    <select name="genre_id" class="search-input">
        <option value="">All Genres</option>
        @foreach($genres as $genre)
            <option value="{{ $genre->id }}" {{ request('genre_id') == $genre->id ? 'selected' : '' }}>
                {{ $genre->name }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="search-button">
        <i class="fa fa-search"></i> Search
    </button>
    </form>


        <form action="{{ route('admin.movies.create') }}" method="GET">
            <button type="submit" 
                class="w3-button w3-green w3-medium" 
                style="font-size: 18px; padding: 12px 24px; border: none; color: white; border-radius: 12px;" 
                title="Create Movie">
                <i class="fa fa-plus"></i> Create Movie
            </button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Release Date</th>
                <th>Rating</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>
                    @if($movie->image)
                        <a href="{{ asset($movie->image) }}" target="_blank">
                            <img src="{{ asset($movie->image) }}">
                        </a>
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $movie->name }}</td>
                <td>{{ $movie->description ?? 'N/A' }}</td>
                <td>{{ $movie->duration }} hrs</td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->rating }}</td>
                <td>{{ $movie->genre->name ?? 'N/A'}}</td>
                <td>
                    <a href="{{ route('admin.movies.edit', $movie->id) }}" class="w3-button w3-blue w3-small" title="Edit">
                        <i class="fa fa-edit"></i>
                    </a>

                    <form action="{{ route('admin.movies.delete', $movie->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w3-button w3-red w3-small" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

