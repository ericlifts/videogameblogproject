<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')-> insert([
        [
            'name' => 'Sports'
        ],
        [
            'name' => 'FPS'
        ],
        [
            'name' => 'Nintendo'
        ],
        [
            'name' => 'Horror'
        ],
        [
            'name' => 'Adventure'
        ],
        [
            'name' => 'Action'
        ],
        [
            'name' => 'MMO'
        ]

        ]);
    }
}
