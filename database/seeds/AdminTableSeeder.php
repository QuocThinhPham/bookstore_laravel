<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'email' => 'nam@gmail.com',
                'password' => Hash::make('admin')
            ],
            [
                'email' => 'hthinh@gmail.com',
                'password' => Hash::make('admin')
            ],
            [
                'email' => 'qthinh@gmail.com',
                'password' => Hash::make('admin')
            ]
        ];
        DB::table('admin')->insert($data);
    }
}
