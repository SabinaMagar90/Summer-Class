<!-- @extends('master')

@section('content')
    <div class="main">
        <h2>Movies</h2><br>
        <table>
            <thead>
                <tr>
                    <th>#</th>
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
                        <td>{{ $loop-> index +1}}</td>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->description ?? 'N/A' }}</td>
                        <td>{{ $movie->duration }} hrs</td>
                        <td>{{ $movie->release_date}}</td>
                        <td>{{ $movie->rating }}</td>
                        <td>{{ $movie->genre_id }}</td>
                        <td>

                            <a href='#' class="w3-button w3-blue w3-small" title="Edit">
                            <i class="fa fa-edit"></i>
                            </a>

                        <form action="{{ route('admin.movies.delete', $movie->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger p-0" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection -->

<!-- 
@extends('admin.master')

@section('content')
    <div class="main">
        <h2>Movies</h2><br>
        <table>
            <thead>
                <tr>
                    <th>#</th>
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
                        <td>{{ $loop-> index +1}}</td>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->description ?? 'N/A' }}</td>
                        <td>{{ $movie->duration }} hrs</td>
                        <td>{{ $movie->release_date}}</td>
                        <td>{{ $movie->rating }}</td>
                        <td>{{ $movie->genre_id }}</td>
                        <td>
                            <a href='#' class="w3-button w3-blue w3-small" title="Edit">
                            <i class="fa fa-edit"></i>
                            </a>

                        <form action="{{ route('admin.movies.delete', $movie->Id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger p-0" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        </form>

                            <!-- <form action="{{ route('admin.movies.delete', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-danger btn btn-link p-0" 
                            onclick="return confirm('Are you sure you want to delete this movie?')" 
                            title="Delete" style="border:none; background:none;">
                            <i class="fa fa-trash"></i>
                            </button>
                            </form> -->


                            <!-- <a href="{{route('admin.movies.delete', $movie->id)}}" class="text-danger"
                            onclick = "return confirm("Are you sure you wan tot delete this movie?")  
                            title="Delete">
                            <i class="fa fa-trash"></i>
                            </a> -->
                            <!-- <button class="w3-button w3-red w3-small" title="Delete">
                            <i class="fa fa-trash"></i>
                            </button> -->
                        <!-- </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection 
--> 
