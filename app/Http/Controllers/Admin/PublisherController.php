<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPublisherRequest;
use Illuminate\Http\Request;
use App\Publishers;

class PublisherController extends Controller
{
    //
    public function getPublisher()
    {
        $data['publisherlist'] = Publishers::all();
        return view('backend.publisher', $data);
    }

    public function postPublisher(AddPublisherRequest $request)
    {
        $publisher = new Publishers;
        $publisher->publisher_name = $request->name;
        $publisher->save();
        return back();
    }

    public function getEditPublisher($id)
    {
        $data['publisher'] = Publishers::find($id);
        return view('backend.editpublisher', $data);
    }

    public function postEditPublisher($id)
    { }

    public function getDeletePublisher($id)
    {
        Publishers::destroy($id);
        return back();
    }
}
