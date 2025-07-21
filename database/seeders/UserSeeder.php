<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'email_verified_at' => null,
            'password' =>'john123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Aarav Sharma',
            'email' => 'aarav@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('aarav123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Priya Thapa',
            'email' => 'priya@example.com',
            'email_verified_at' => Carbon::now(),
            'password' =>'priya123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Suman Gurung',
            'email' => 'suman@example.com',
            'email_verified_at' => Carbon::now(),
            'password' =>'suman123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Alisha Karki',
            'email' => 'alisha@example.com',
            'email_verified_at' => null,
            'password' =>'alisha123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Binod Rai',
            'email' => 'binod@example.com',
            'email_verified_at' => null,
            'password' => Hash::make('binod123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Maya Singh',
            'email' => 'maya@example.com',
            'email_verified_at' => Carbon::now(),
            'password' =>'maya123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Kishor Tamang',
            'email' => 'kishor@example.com',
            'email_verified_at' => null,
            'password' => Hash::make('kishor123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Pooja Singh',
            'email' => 'pooja@example.com',
            'email_verified_at' => Carbon::now(),
            'password' =>'pooja123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Niraj Bista',
            'email' => 'niraj@example.com',
            'email_verified_at' => null,
            'password' =>'niraj123',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Kritika Lama',
            'email' => 'kritika@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('kritika123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
