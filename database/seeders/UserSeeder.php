<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Orxan',
            'surname' => 'Ibrahimov',
            'email' => 'orxan.ibrahimli.98@gmail.com',
            'nickname' => 'Okus',
            'password' => 'orxan'  ,         
            'is_freelance' => true ,         
        ]);
    }
}
