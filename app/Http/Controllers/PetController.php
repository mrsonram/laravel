<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Pet::get();
        return view('pet/index', compact('animals'));
    }

    public function gmaps()
    {
    	$locations = DB::table('animals')->get();
    	return view('gmaps',compact('locations'));
    }

    public function info()
    {
        $animals = Pet::get()
                        ->sortBy("name");
        return view('pet/info', compact('animals'));
    }

    public function news()
    {
        $news = News::get();
        return view('pet/news', compact('news'));
    }

    public function map()
    {
        $animals = Pet::get();
        return view('pet/map', compact('animals'));
        //$locations = DB::table('animals')->get();
    	//return view('pet/map',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animals = Pet::findOrFail($id);

        return view('pet/show')->with([
            'data' => $animals
        ]);
    }

    public function message($id)
    {
        $news = News::findOrFail($id);

        return view('pet/news/show')->with([
            'data' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
