<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,80) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'blood_type' => '',
                'email' => $faker->email,
                'dob' => $faker->date('Y-m-d'),
                'contact_number' => $faker->phoneNumber,
                'address' => $faker->address,
                'guardian_name' => $faker->name,
                'gurdian_phone_number'=> $faker->phoneNumber,
                'guardian_email' => $faker->email,
                'gender'=> 'male',
                'roles'=>'student',
                'qualification'=>'N/A',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
