<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
        [
            
            'name' => 'John Doe',
            'email' => Str::random(10).'@gmail.com',
            'password' =>Str::random(8),
        
        ],[
            
            'name' => 'Mary Doe',
            'email' => Str::random(10).'@gmail.com',
            'password' =>Str::random(8),
        
        ],[
            
            'name' => 'Eric Doe',
            'email' => Str::random(10).'@gmail.com',
            'password' =>Str::random(8),
        
        ],[
            
            'name' => 'Garret Doe',
            'email' => Str::random(10).'@gmail.com',
            'password' =>Str::random(8),
        
        ],[
            
            'name' => 'Colin Doe',
            'email' => Str::random(10).'@gmail.com',
            'password' =>Str::random(8),
        
        ],[
            
            'name' => 'Olivia Doe',
            'email' => Str::random(10).'@gmail.com',
            'password' =>Str::random(8),
        
        ],[
            
            'name' => 'Elizabeth Doe',
            'email' => Str::random(10).'@gmail.com',
            'password' =>Str::random(8),
        
        ]
        ]);
    }
}
