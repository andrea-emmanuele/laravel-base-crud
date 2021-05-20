<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();

        return view('comics', compact('comics'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show(Comic $comic)
    {
        //
    }

    public function edit(Comic $comic)
    {
        //
    }

    public function update(Request $request, Comic $comic)
    {
        //
    }

    public function destroy(Comic $comic)
    {
        //
    }
}
