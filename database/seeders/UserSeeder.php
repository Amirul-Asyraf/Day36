<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,50) as $index) {
            //this is insert fake data Method #1
            //note that Method #1 will not update the date created & date updated
            // DB::table('companies')->insert([
            //     'name'=> $faker->name,
            //     // 'email'=> $faker->email,
            //     // 'dob'=> $faker->date($format = 'D-m-y', )
            // ]);

            //this is insert fake data Method #2
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = bcrypt('password');
            $user->role = '2';
            $user->save();
        }
    }
}
