<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Types;
use App\Books;
use App\Publishers;
use App\Authors;
use DB;
use App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{
    //
    public function getProduct()
    {
        $data['productlist'] = DB::table('books')
            ->join('types', 'books.type_id', '=', 'types.type_id')
            ->orderBy('book_id', 'desc')->get();
        return view('backend.product', $data);
    }

    public function getAddProduct()
    {
        $data['typelist'] = Types::all();
        $data['publisherlist'] = Publishers::all();
        $data['authorlist'] = Authors::all();

        return view('backend.addproduct', $data);
    }

    public function postAddProduct(AddProductRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $product = new Books;
        $product->book_name = $request->name;
        $product->book_price = $request->price;
        $product->book_amount = $request->amount;
        $product->book_img = $filename;
        $product->publisher_id = $request->publisher;
        $product->author_id = $request->author;
        $product->type_id = $request->type;

        $product->save();
        $request->img->storeAs('avatar', $filename);

        return back();
    }

    public function getEditProduct($id)
    {
        $data['product'] = Books::find($id);
        $data['catelist'] = Types::all();
        $data['publisherlist'] = Publishers::all();
        $data['authorlist'] = Authors::all();

        return view('backend.editproduct', $data);
    }

    public function postEditProduct(Request $request, $id)
    {
        $product = new Books;
        $arr['book_name'] = $request->name;
        $arr['book_price'] = $request->price;
        $arr['book_status'] = $request->status;
        $arr['book_publisher'] = $request->publisher;
        $arr['book_author'] = $request->author;
        $arr['book_cate'] = $request->cate;

        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['book_img'] = $img;
            $request->img->storeAs('avatar', $img);
        }
        $product::where('book_id', $id)->update($arr);
        return redirect('admin/product');
    }

    public function getDeleteProduct($id)
    {
        Books::destroy($id);
        return back();
    }
}
