@extends('admin.master')

@section('content')
<div class="main">
    <h2>Add New User</h2>

    <form action="{{ route('admin.users.store') }}" method="POST" style="max-width: 700px;">
        @csrf

        <div class="w3-section">
            <label><b>Name</b></label>
            <input class="w3-input w3-border" type="text" name="name" value="{{ old('name') }}" maxlength="55" required>
            @error('name')
                <small class="w3-text-red">{{ $message }}</small>
            @enderror
        </div>

        <div class="w3-section">
            <label><b>Email</b></label>
            <input class="w3-input w3-border" type="email" name="email" value="{{ old('email') }}" maxlength="55" required>
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
            <button type="submit" class="w3-button w3-green" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Save User
            </button>
            <a href="{{ route('admin.users.index') }}" class="w3-button w3-gray" style="font-size: 17px; padding: 10px 20px; border-radius: 10px;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
