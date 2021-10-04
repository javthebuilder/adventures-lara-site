<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'Admin',
            'email' => 'admin@adventuresmarketingconcepts.com',            
            'password' => Hash::make('password')
        ]);


        User::create([
            'name' => 'Nikko',
            'email' => 'nikko@adventuresmarketingconcepts.com',            
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Bea',
            'email' => 'bea@adventuresmarketingconcepts.com',            
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Shinga',
            'email' => 'shinga@adventuresmarketingconcepts.com',            
            'password' => Hash::make('password')
        ]);


        User::create([
            'name' => 'Mario',
            'email' => 'mario@adventuresmarketingconcepts.com',            
            'password' => Hash::make('password')
        ]);

    
    }
}
