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
        $productlist = Books::all();
        return view('backend.product', compact('productlist'));
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
        $product->book_status = $request->status;
        $product->book_img = $filename;
        $product->book_publisher = $request->publisher;
        $product->book_author = $request->author;
        $product->book_type = $request->type;

        $product->save();
        $request->img->storeAs('avatar', $filename);

        return back();
    }

    public function getEditProduct($id)
    {
        $data['product'] = Books::find($id);
        $data['typelist'] = Types::all();
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
        $arr['book_type'] = $request->type;

        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['book_img'] = $img;
            $request->img->storeAs('avatar', $img);
        }
        $product::where('book_id', $id)->update($arr);
        return redirect('dashboard/product');
    }

    public function getDeleteProduct($id)
    {
        Books::destroy($id);
        return back();
    }
}
