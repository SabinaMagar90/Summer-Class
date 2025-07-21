<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
       $title = 'User';

        $users = User::latest()->get();

        return view('admin.users.index', compact('title', 'users'));
    }

    public function delete($userId)
    {
        User::where('id', $userId)->delete();
        toastr()->success('User has been deleted successfully!');
        return redirect()->route('admin.users.index');
    }
    
    public function create()
    {
        $title = 'Create User';
        $users = User::all();

        return view('admin.users.create', compact('users', 'title'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:55',
            'email' => 'required|string|max:55',
            'password' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        User::create($request->all());

        toastr()->success('User created successfully!');
        return redirect()->route('admin.users.index');
    }

    public function edit($userId)
    {
        $title = 'Edit User';
        $user = User::where('id', $userId)->first();
       
        return view('admin.users.edit', compact('user', 'title'));
    }

    public function update(Request $request, $userId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:55',
            'email' => 'required|string|email|max:55',
            'password' => 'nullable|string|min:6|max:255', // nullable: only update if filled
        ]);

        if ($validator->fails()) {
            toastr()->warning('Please check your form and try again.');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        $user = User::where('id', $userId)->first();

        if (!$user) {
            toastr()->error('User not found.');
            return redirect()->route('admin.users.index');
        }

        // Update fields
        $user->name = $request->name;
        $user->email = $request->email;

        // Only update password if it's filled
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        toastr()->success('User updated successfully!');
        return redirect()->route('admin.users.index');
    }

}
