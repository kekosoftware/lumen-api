<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PlayersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call(PlayersTableSeeder::class);
    }
}
