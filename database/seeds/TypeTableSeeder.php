<?php

use Illuminate\Database\Seeder;
use App\Types;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->delete();
        Types::create(array(
            'type_id' => '1',
            'type_name' => 'Tiểu Thuyết'
        ));
        Types::create(array(
            'type_id' => '2',
            'type_name' => 'Sách văn học'
        ));
    }
}
