<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mahjoub Mohamed Mosa',
            'user_name' => 'Mahjoub',
            'phone' => '0903380371',
            'isAdmin' => 1,
            'email' => 'app@app.com',
            'password' => bcrypt(123123123),
        ]);
    }
}
