<?php

use App\Books;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->delete();
        for ($i = 0; $i < 10; ++$i) {
            Books::create(array(
                'book_name' => 'book' . $i,
                'book_price' => $i,
                'book_img' => 'book1.jpg',
                'publisher_id' => '1',
                'author_id' => '1',
                'type_id' => '1'
            ));
        }
    }
}
