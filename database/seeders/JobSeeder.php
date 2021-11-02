<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,10) as $index) {
            $job = new Job();
            $job->title = "Software Engineer";
            $job->description = $faker->text($maxNbChars = 300);;
            $job->min_salary = '3000.00';
            $job->max_salary = rand(3000.00, 20000.00);
            $job->save();
        }
    }
}
