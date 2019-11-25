<?php

use Illuminate\Database\Seeder;
use App\Publishers;


class PublisherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('publishers')->delete();
        Publishers::create(array(
            'publisher_id' => '1',
            'publisher_name' => 'Nhà Xuất Bản Trẻ'
        ));
    }
}
