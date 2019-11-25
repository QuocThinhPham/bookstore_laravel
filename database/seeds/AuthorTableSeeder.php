<?php

use Illuminate\Database\Seeder;
use App\Authors;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->delete();
        Authors::create(array(
            'author_id' => '1',
            'author_name' => 'Nguyễn Nhật Ánh'
        ));
        Authors::create(array(
            'author_id' => '2',
            'author_name' => 'Nam Cao'
        ));
    }
}
