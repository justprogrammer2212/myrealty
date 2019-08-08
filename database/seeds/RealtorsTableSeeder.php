<?php

use Illuminate\Database\Seeder;

class RealtorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Realtor', 8)->create();
    }
}
