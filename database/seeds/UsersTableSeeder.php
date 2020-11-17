<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@exp.test',
            'password' => Hash::make('123456'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@exp.test',
            'password' => Hash::make('123456'),
            'role_id' => 2,
        ]);
    }
}
