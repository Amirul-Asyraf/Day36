<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $dept = new Department();
        $dept->department_name = "Systems";
        $dept->save();

        $dept2 = new Department();
        $dept2->department_name = "Digital Marketing";
        $dept2->save();

        $dept3 = new Department();
        $dept3->department_name = "Commercial";
        $dept3->save();

        $dept4 = new Department();
        $dept4->department_name = "Creative";
        $dept4->save();
    }
}
