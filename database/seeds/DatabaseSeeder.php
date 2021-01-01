<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(array('name' => 'aseel',
    'email' => 'aseelsiam@hotmail.com',
    'password' => bcrypt('aseel123456')));
    }
}
