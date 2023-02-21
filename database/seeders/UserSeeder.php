<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        	[
	        	'phone' => '04120537589',
	        	'email' => 'admin@test.com',
	        	'password' =>bcrypt('1234'),
	        	'role' => 1,
				],
        ]);
    }
}
