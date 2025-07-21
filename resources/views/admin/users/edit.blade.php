@extends('admin.master')

@section('content')
<div class="main">
    <h2>Edit User</h2>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" style="max-width: 700px;">
        @csrf
        @method('PUT')

        <div class="w3-section">
            <label><b>Name</b></label>
            <input class="w3-input w3-border" type="text" name="name" 
                   value="{{ old('name', $user->name) }}" required>
            @error('name')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Email</b></label>
            <input class="w3-input w3-border" type="email" name="email" value="{{ old('email', $user->email) }}" maxlength="55" required>
            @error('email')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="password" name="password" value="{{ old('password') }}" required>
            @error('password')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section" style="margin-top: 20px;">
            <button type="submit" class="w3-button w3-blue" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Update User
            </button>
            <a href="{{ route('admin.movies.index') }}" class="w3-button w3-gray" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
