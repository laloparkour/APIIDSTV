<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Isaac';
        $user->lastname = 'Email';
        $user->email = 'i_aac@hotmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

        $user2 = new User();
        $user2->name = 'Nayeli';
        $user2->lastname = 'Flores';
        $user2->email = 'naye@hotmail.com';
        $user2->password = bcrypt('123456789');
        $user2->save();
    }
}
    