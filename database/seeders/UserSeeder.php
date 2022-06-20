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
        User::create(['name'=>'admin', 'email'=>'admin@admin.com', 'email_verified_at'=> now(),
            'password'=> bcrypt('1234'), 'remember_token' => '0123456789',]);
        // User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.pl',
        //     'email_verified_at' => now(),
        //     'password' => '1234',
        //     'remember_token' => '0123456789',
        // ]);
        for($i=0; $i<99; $i++){
            User::factory()->create(User::factory()->definition());
        }
    }
}
