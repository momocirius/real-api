<?php

use App\User;
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

        User::create(
            array(
                'name' => 'admin',
                'email' => 'admin@admin.org',
                'password' => Hash::make('admin'),
            )
        );
        User::create(
            array(
                'name' => 'dev ',
                'email' => 'dev@dev.org',
                'password' => Hash::make('dev'),
            )
        );

    }
}
