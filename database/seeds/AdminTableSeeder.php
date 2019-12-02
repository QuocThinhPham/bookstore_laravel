<?php

use Illuminate\Database\Seeder;

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
