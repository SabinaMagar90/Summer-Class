@extends('admin.master')

@section('content')
<div class="main">
    <h2>Add New Movie</h2>

    <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data" style="max-width: 700px;">
        @csrf

        <div class="w3-section">
            <label><b>Name</b></label>
            <input class="w3-input w3-border" type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Description</b></label>
            <textarea class="w3-input w3-border" name="description" rows="4" placeholder="Movie description...">{{ old('description') }}</textarea>
            @error('description')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Duration (in hours)</b></label>
            <input class="w3-input w3-border" type="number" step="0.01" name="duration" value="{{ old('duration') }}" required>
            @error('duration')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Release Date</b></label>
            <input class="w3-input w3-border" type="date" name="release_date" value="{{ old('release_date') }}" required>
            @error('release_date')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Rating</b></label>
            <input class="w3-input w3-border" type="number" step="0.1" name="rating" min="0" max="10" value="{{ old('rating') }}" required>
            @error('rating')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Genre</b></label>
            <select class="w3-select w3-border" name="genre_id" required>
                <option value="" disabled {{ old('genre_id') ? '' : 'selected' }}>Choose genre</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
            @error('genre_id')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Language</b></label>
            <input class="w3-input w3-border" type="text" name="language" value="{{ old('language') }}" required>
            @error('language')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Image</b></label>
            <input class="w3-input w3-border" type="file" name="image" required>
            @error('image')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section" style="margin-top: 20px;">
            <button type="submit" class="w3-button w3-green" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Save Movie
            </button>
            <a href="{{ route('admin.movies.index') }}" class="w3-button w3-gray" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
