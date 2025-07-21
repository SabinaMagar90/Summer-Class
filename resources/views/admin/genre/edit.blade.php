@extends('admin.master')

@section('content')
<div class="main">
    <h2>Edit Genre</h2>

    <form action="{{ route('admin.genre.update', $genre->id) }}" method="POST" style="max-width: 700px;">
        @csrf
        @method('PUT')

        <div class="w3-section">
            <label><b>Name</b></label>
            <input class="w3-input w3-border" type="text" name="name" 
                   value="{{ old('name', $genre->name) }}" required>
            @error('name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Description</b></label>
            <textarea class="w3-input w3-border" name="description" rows="4" placeholder="Movie description...">{{ old('description', $genre->description) }}</textarea>
            @error('description')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section" style="margin-top: 20px;">
            <button type="submit" class="w3-button w3-blue" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Update Genre
            </button>
            <a href="{{ route('admin.genre.index') }}" class="w3-button w3-gray" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
