<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\User;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'Dong Van Hung';
        $user->email ='tata.dongvanhung@gmail.com';
        $user->phone_number = '0123456789';
        $user->pasword = Hash::make('123456');
        $user->address = 'Viet Nam';
        $user->user_type = '1';
        $user->save();

        $user->name = 'admin';
        $user->email ='admin@gmail.com';
        $user->phone_number = '0123456789';
        $user->pasword = Hash::make('123456');
        $user->address = 'Viet Nam';
        $user->user_type = '1';

        $user->name = 'client';
        $user->email ='client@gmail.com';
        $user->phone_number = '0123456789';
        $user->pasword = Hash::make('123456');
        $user->address = 'Viet Nam';
        $user->user_type = '2';
    }
}
