<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 =  User::create([
            'name' => 'Silas Abdul',
            'email' => 'silas@gmail.com',
            'username' => 'silas',
            'mobile' => '07035621550',
            'password' => bcrypt('password')
        ]);

        $user2 =  User::create([
            'name' => 'Nelson Excel',
            'email' => 'excel@gmail.com',
            'username' => 'excel',
            'mobile' => '07035621551',
            'password' => bcrypt('password'),
            'role' => 'teacher',
        ]);

        Profile::create([
            'user_id' => $user1->id,
        ]);

        Profile::create([
            'user_id' => $user2->id,
        ]);

        Teacher::create([
            'user_id' => $user2->id,
        ]);
    }
}
