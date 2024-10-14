<?php

namespace Database\Seeders;

use App\Models\Profile;
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

        $user =  User::create([
            'name' => 'Silas Abdul',
            'email' => 'silas@gmail.com',
            'username' => 'silas',
            'mobile' => '07035621550',
            'password' => bcrypt('password')
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);
    }
}
