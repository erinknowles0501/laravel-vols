<?php

use Illuminate\Database\Seeder;

class VolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Vol', 10)->create();
    }
}
