<?php

use Illuminate\Database\Seeder;
use App\Users;
class UsersSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        Users::create(array(
            'user_name' => 'Phan Trung Naem',
            'user_email' => '1@gmail.com',
            'user_password' => Hash::make('123'),
            'user_phone_number' => '04659565'
        ));


    }
}
