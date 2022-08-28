<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        for ($i = 0; $i < 500; $i++) {
            Profile::create([
                'name'      =>  'Test User',
                'image'     =>  'test@example.com',
                'date'      =>  '20/10/2022',
                'phone'     =>  '01068147654',
                'status'    =>  1,
                'user_id'   =>  2
            ]);
        }
    }
}
