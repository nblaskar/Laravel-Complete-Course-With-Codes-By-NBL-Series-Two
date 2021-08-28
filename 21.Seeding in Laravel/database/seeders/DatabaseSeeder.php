<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Mention to Execute all Seeder File as a time by php artisan db:seed
        $this->call([
            StudentSeeder::class,
        ]);
    }
}
