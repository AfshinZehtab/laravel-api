<?php

use App\Personnel;
use Illuminate\Database\Seeder;

class PersonnelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personnel::create(['employee' => 'Pete', 'supervisor' => 'Nick']);
        Personnel::create(['employee' => 'Barbara', 'supervisor' => 'Nick']);

    }
}
