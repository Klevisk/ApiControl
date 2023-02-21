<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
        	[
	        	'email' => 'hola@mail.com',
	        	'password' => '1234',
	        	'date_renew' => '22-01-26',
                'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	],
            [
	        	'email' => 'holga@mail.com',
	        	'password' => '1234',
	        	'date_renew' => '26-01-29',
                'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	],
            [
	        	'email' => 'holda@mail.com',
	        	'password' => '1234',
	        	'date_renew' => '26-05-26',
                'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	],
            [
	        	'email' => 'holae@mail.com',
	        	'password' => '1234',
	        	'date_renew' => '26-04-26',
                'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	],
            [
	        	'email' => 'holla@mail.com',
	        	'password' => '1234',
	        	'date_renew' => '26-03-26',
                'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	],
            [
	        	'email' => 'hola65@mail.com',
	        	'password' => '1234',
	        	'date_renew' => '260226',
                'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	],
            [
	        	'email' => 'hol21a@mail.com',
	        	'password' => '1234',
	        	'date_renew' => '260926',
                'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	],

        ]);
    }
}
