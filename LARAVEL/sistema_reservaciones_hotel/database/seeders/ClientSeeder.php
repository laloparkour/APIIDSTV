<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Isaac',
            'lastname' => 'Emiliano',
            'email' => 'isaac@gmail.com',
            'phone_number' => '6121769805',
        ]);

        DB::table('clients')->insert([
            'name' => 'Nayeli',
            'lastname' => 'Flores',
            'email' => 'nate@gmail.com',
            'phone_number' => '6121616762',
        ]);
        
    }
}

