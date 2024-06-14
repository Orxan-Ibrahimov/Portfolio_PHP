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
            'github' => 'https://github.com/Orxan-Ibrahimov',
            'biography' => 'I am backend developer',
            'city' => 'Sumqayıt',
            'phone' => '0557482600',
            'birthday' => date_create("14 October 1998"),
            'address' => 'Sumqayıt şəhəri, İnşaatçılar qəsəbəsi, Bünyadzadə küçəsi, məhəllə 8, ev 10',
            'password' => 'orxan'  ,         
            'is_freelance' => true ,         
        ]);
    }
}
