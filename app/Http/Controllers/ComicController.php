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
        return view('create');
    }

    public function store(Request $request)
    {
        Comic::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => "null",
            'price' => $request->price,
            'series' => $request->series,
            'sale_date' => $request->saleDate,
            'type' => $request->type
        ]);

        $comic = Comic::all()->last();

        return redirect()->action(
            [ComicController::class, 'show'], ['comic' => $comic]
        );
    }

    public function show(Comic $comic)
    {
        return view('/show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    public function update($id)
    {
        $comic = Comic::find($id);

        $comic->title = request('title');
        $comic->description = request('description');
        $comic->price = request('price');
        $comic->series = request('series');
        $comic->sale_date = request('saleDate');
        $comic->type = request('type');
        $comic->save();

        return redirect('/comics/' . $id);
    }

    public function destroy(Comic $comic)
    {
    }
}
