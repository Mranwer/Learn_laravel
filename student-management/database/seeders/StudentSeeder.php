<?php

namespace Database\Seeders;

// use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('tests')->insert([
        //     'name'=>'john doe',
        //     'email'=>'ismail@123gmail.com',
        //     'phone'=>'0987654321'
        // ]);

        DB::table('tests')->insert([
            'name'=>str::random(10),
            'email'=>str::random(10).'@gmail.com',
            'phone' => fake()->numerify('##########')

        ]);
    }
}

// php artisan make:seeder StudentSeeder ye seeder banane ke liye hai
// php artisan db:seed --class=StudentSeeder ye seeder run krne ke liye hai

// migration
// php artisan migration create_test_table
// php artisan migrate
// php artisan migrate:reset
// php artisan migrate:rollback
