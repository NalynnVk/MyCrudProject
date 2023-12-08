<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,5) as $value){
            DB::table('students')-> insert([
                'FirstName' => $faker->firstName,
                'SecondName' => $faker->LastName,
                'Gender' => $faker->randomElement(['M','F']),
                'Address' => $faker->address,
            ]);
        }
    }
}
