<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Authors;
use App\Http\Requests\AddAuthorRequest;
use App\Http\Requests\EditAuthorRequest;
use PharIo\Manifest\Author;

class AuthorController extends Controller
{
    //
    public function getAuthor()
    {
        $data['authorlist'] = Authors::all();
        return view('backend.author', $data);
    }

    public function postAuthor(AddAuthorRequest $request)
    {
        $author = new Authors;
        $author->author_name = $request->name;
        $author->save();
        return back();
    }

    public function getEditAuthor($id)
    {
        $data['author'] = Authors::find($id);
        return view('backend.editauthor', $data);
    }

    public function postEditAuthor(EditAuthorRequest $request, $id)
    {
        $author = Authors::find($id);
        $author->author_name = $request->name;

        $author->save();
        return redirect()->intended('dashboard/author');
    }

    public function getDeleteAuthor($id)
    {
        Authors::destroy($id);
        return back();
    }
}
