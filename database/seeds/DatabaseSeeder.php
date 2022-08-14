<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = 'user,user@gmail.com#admin2,admin2@gmail.com#admin3,admin3@gmail.com';

        $faker = Faker::create();

        foreach (explode('#',$user) as $first){
            // first it be "admin 1,admin1,0" 
            $fakeuser = explode(',', $first);
            User::create([
                'name' => $faker->name,
                'email' => $fakeuser[0],
                'password' => Hash::make($fakeuser[0]),
                'roles' => 'admin'
            ]);
        }
    }
}
