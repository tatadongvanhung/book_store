<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = new User();
        $userAdmin->name = 'admin';
        $userAdmin->email ='admin@gmail.com';
        $userAdmin->phone_number = '0123456789';
        $userAdmin->password = Hash::make('123456');
        $userAdmin->address = 'Viet Nam';
        $userAdmin->user_type = User::USER_TYPE_ADMIN;
        $userAdmin->save();

        $userClient = new User();
        $userClient->name = 'client';
        $userClient->email ='client@gmail.com';
        $userClient->phone_number = '0123456789';
        $userClient->password = Hash::make('123456');
        $userClient->address = 'Viet Nam';
        $userClient->user_type = User::USER_TYPE_CLIENT;
        $userClient->save();
    }
}
