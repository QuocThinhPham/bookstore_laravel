<?php

use Illuminate\Database\Seeder;
use App\Users;

class AdminSeedTable extends Seeder
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
            'user_name' => 'Phan Trung Nam',
            'user_email' => 'nam@gmail.com',
            'user_password' => Hash::make('admin'),
            'user_phone_number' => '04359565',
            'is_admin' => '1'
        ));
        Users::create(array(
            'user_name' => 'Pham Quoc Thinh',
            'user_email' => 'quocthinh@gmail.com',
            'user_password' => Hash::make('admin'),
            'user_phone_number' => '098595696',
            'is_admin' => '1'
        ));
        Users::create(array(
            'user_name' => 'Huynh Le Huu Thinh',
            'user_email' => 'huuthinh@gmail.com',
            'user_password' => Hash::make('admin'),
            'user_phone_number' => '094359565',
            'is_admin' => '1'
        ));

    }
}
