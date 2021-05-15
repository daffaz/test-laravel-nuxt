<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Daffa Zaky",
            'role_id' => 1,
            'email' => 'daffa@zaky.com',
            'password' => bcrypt('makanaja123')
        ]);
    }
}
