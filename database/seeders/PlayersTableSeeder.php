<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => 'Ariel',
            'age' => 24,
            'nationality' => 'English',
            'club' => 'Manchester United',
            'gender' => 'Male',
        ]);

        DB::table('players')->insert([
            'name' => 'Gustavo',
            'age' => 21,
            'nationality' => 'English',
            'club' => 'Manchester United',
            'gender' => 'Male',
        ]);
    }
}
