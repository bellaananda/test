<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Bella Ananda Putri',
            'email'     => 'bellaanandaputri12@gmail.com',
            'password'  => bcrypt('sumbul123')
        ]);
    }
}
