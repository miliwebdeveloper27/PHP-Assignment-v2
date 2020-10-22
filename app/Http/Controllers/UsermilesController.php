<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsermilesController extends Controller
{
    //

    public function index()
    {
        return UsermilesController::all();
    }
 
    public function show($id)
    {
        return UsermilesController::find($id);
    }

    public function store(Request $request)
    {
        return UsermilesController::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = UsermilesController::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = UsermilesController::findOrFail($id);
        $article->delete();

        return 204;
    }
}
