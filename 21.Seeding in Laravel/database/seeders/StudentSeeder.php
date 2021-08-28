<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// import below classes
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// Import Faker Library
use Faker\Factory as Fakers;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1)Insert Particular Data into database student table by seeding
        // DB::table('student')->insert([
        //     'name'=>'Sonam',
        //     'email'=>'sonam@gmail.com',
        //     'password'=>Hash::make('sonam123'),
        // ]);

        // 2)Insert the Random Data into database student table by seeding
        // DB::table('student')->insert([
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'password'=>Hash::make(Str::random(10)),
        // ]);

        // 3)Execute the insertion multiple times by foreach loop
        foreach (range(1,5) as $value) {
            DB::table('student')->insert([
                'name'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'password'=>Hash::make(Str::random(10)),
            ]);
        }

        // 4)Use Faker to insert Dummy Data
        $faker = Fakers::create();//To create data Firts
        // Use faker as below
        foreach (range(1,5) as $value) {
            DB::table('student')->insert([
                'name'=>$faker->name(),
                // 'email'=>$faker->email(), or
                'email'=>$faker->unique()->safeEmail(), // To get Unique email
                'password'=>Hash::make($faker->password()),
            ]);
        }
    }
}
