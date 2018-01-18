<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User;
        $u->name = 'Muhammad Farid';
        $u->email = 'faridzy09@gmail.com';
        $u->username = 'admin';
        $u->password = bcrypt('admin');
        $u->save();
    }
}