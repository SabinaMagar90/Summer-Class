@extends('admin.master')

@section('content')
<div class="main">
    <h2>Genres</h2>

    <form action="{{ route('admin.genre.create') }}" method="GET" style="display: inline; float: right; margin-bottom: 10px;">
        <button type="submit" 
            class="w3-button w3-green w3-medium" 
            style="font-size: 18px; float: right; padding: 12px 24px; border: none; color: white; border-radius: 12px;" 
            title="Create Genre">
            <i class="fa fa-plus"></i> Create Genre
        </button>
    </form>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $loop-> index +1}}</td>
                    <td>{{ $genre->name }}</td>
                    <td>{{ $genre->description ?? 'N/A' }}</td>
                    <td>{{ $genre->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('admin.genre.edit', $genre->id) }}" 
                           class="w3-button w3-blue w3-small" 
                           style="color: blue; border: none;" 
                           title="Edit">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('admin.genre.delete', $genre->id) }}" method="POST" style="display: inline;" 
                              onsubmit="return confirm('Are you sure you want to delete this genre?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                class="w3-button w3-red w3-small" 
                                style="color: red; border: none;" 
                                title="Delete">
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

