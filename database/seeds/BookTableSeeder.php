<?php

use Illuminate\Database\Seeder;
use App\Books;

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
                'book_publisher' => '1',
                'book_author' => '1',
                'book_type' => '1'
            ));
        }
    }
}
