<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'user' => Str::random(10),
            'email' => Str::random(10).'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
     
