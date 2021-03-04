<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // User Creation

    $users = [
      [
        'email' => 'user@user.com',
        'name' => 'User 1',
        'password' => 'user@123'
      ]
    ];

    foreach ($users as $user) {
      User::updateOrCreate([
        'email' => $user['email'],
      ], [
        'name' => $user['name'],
        'password' => Hash::make($user['password']),
      ]);
    }

  }
}
