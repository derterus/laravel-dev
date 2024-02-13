<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stud;

class Student_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $faker = \Faker\Factory::create('ru_RU');

        for($i =0; $i <10;$i++){
            Stud::create([
                'name'=> $faker->firstName,
                'secondname'=> $faker->lastName,
                'age'=> $faker->numberBetween(1,100),
                'birthday'=> $faker->date('Y-m-d', strtotime('')),
            ]);
        }
    }
}
