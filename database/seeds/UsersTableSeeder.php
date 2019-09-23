<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 50)->create();
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->loans()->save(factory(App\Loan::class)->make());
        });
        //
        
        // {
        //     // Let's clear the users table first
        //     User::truncate();
    
        //     $faker = \Faker\Factory::create();
    
        //     // Let's make sure everyone has the same password and 
        //     // let's hash it before the loop, or else our seeder 
        //     // will be too slow.
        //     $password = Hash::make('dee-mot');
    
    
        //     // And now let's generate a few dozen users for our app:
        //     for ($i = 0; $i < 20; $i++) {
        //         User::create([
        //             'name' => $faker->name,
                   
        //             'password' => $password,
        //             'email' => $faker->unique()->safeEmail,
        //             'email_verified_at' => now(),
        //             'remember_token' => Str::random(10),
        //         ]);
        //     }
        // }
    }
}
