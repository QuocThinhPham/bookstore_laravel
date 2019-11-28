<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
use App\Types;

class CategoryController extends Controller
{
    //
    public function getCate()
    {
        $data['typelist'] = Types::all();
        return view('backend.category', $data);
    }

    public function postCate(AddCateRequest $request)
    {
        $type = new Types;
        $type->type_name = $request->name;
        $type->save();
        return back();
    }

    public function getEditCate($id)
    {
        $data['cate'] = Types::find($id);
        return view('backend.editcategory', $data);
    }

    public function postEditCate(EditCateRequest $request, $id)
    {
        $type = Types::find($id);
        $type->type_name = $request->name;

        $type->save();
        return redirect()->intended('dashboard/category');
    }

    public function getDeleteCate($id)
    {
        Types::destroy($id);
        return back();
    }
}
