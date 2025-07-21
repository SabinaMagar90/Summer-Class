@extends('admin.master')

@section('content')
    <div class="main">
        <h2>Users</h2><br>

        <form action="{{ route('admin.users.create') }}" method="GET" style="display: inline; float: right; margin-bottom: 10px;">
            <button type="submit" 
                class="w3-button w3-green w3-medium" 
                style="font-size: 18px; float:right; padding: 12px 24px; border: none; color: white; border-radius: 12px;" 
                title="Create User">
            <i class="fa fa-plus"></i> Create User
            </button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Email Verified At</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->email_verified_at ?? 'Not Verified' }}</td>
                        <td>{{ $user->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="w3-button w3-blue w3-small" style="color:blue; border:none" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display: inline;"
                                onsubmit="return confirm('Are you sure you want to delete this user?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w3-button w3-red w3-small" style="color:red; border:none" title="Delete">
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
