<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Here's all the beers!";
    }

    /** bar layout */

    public function bar()
    {
        $beers = \App\Models\Beer::all();
        return view ('beers.1920', ['beers' => $beers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beers = \App\Models\Beer::all();
        
        return view('beers.create' , ['beers' => $beers]
    );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->id;
        // Validate the request...
        $request->validate([
            'title' => 'required|unique:beers|max:255',
            'tags' => 'required',
            'notes' => 'required',
            'style' => 'required',
            'price' => 'required',
            'abv' => 'required',
            'date_brewed' => 'required',
            'glass_type' => 'required',
            'color' => 'required',
            'aroma' => 'required',
            'ibu' => 'required',
            'untappd_rating' => 'required',
            'image' => 'required',
        ]);

        // get the beer by id if it exists
        $beer = \App\Models\Beer::find($id);    
        // if it doesn't exist, create a new beer
        if (!$beer) {
            $beer = new \App\Models\Beer();
        }
        // set the beer's properties
        
        $beer->title = $request->title;
        $beer->tags = $request->tags;
        $beer->notes = $request->notes;
        $beer->style = $request->style;
        $beer->price = $request->price;
        $beer->abv = $request->abv;
        $beer->date_brewed = $request->date_brewed;
        $beer->glass_type = $request->glass_type;
        $beer->color = $request->color;
        $beer->aroma = $request->aroma;
        $beer->ibu = $request->ibu;
        $beer->untappd_rating = $request->untappd_rating;
        $beer->image = $request->image;


        $beer->save();
        return redirect()->route('beers.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
