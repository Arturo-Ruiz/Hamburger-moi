<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Arturo Ruiz',
            'role' => '1',
            'email' => 'gregory09ruiz@gmail.com',
            'password' => bcrypt('123'),
        ]);

        App\User::create([
            'name' => 'Moises Serrano',
            'role' => '1',
            'email' => 'moycs777@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
