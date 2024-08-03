<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        User::factory()->create([
            'id' => '1',
            'or_no' => '12345',
            'lastname' => 'Peria',
            'firstname' => 'Cent Kenneth',
            'middlename' =>'Tag-at',
            'email' => 'centkennethperia@gmail.com',
            'password' => Hash::make('Secret123#'),
            'role' => 'admin',
            'bday' => '1997-06-12',
            'age' => '26',
            'place_of_birth' => 'Davao City',
            'gender' => 'Male',
            'civil_status' => 'Single'
            
            
        ]);
    }
}
