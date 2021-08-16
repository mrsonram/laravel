<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');

        if(!empty($q))
        {
            $animals = Manage::where("name", "like", "%{$q}%")
                            ->orWhere("gender", "like", "%{$q}%")
                            ->get();;
        }
        else
        {
            $animals = Manage::get();
        }

        return view('manage/index', compact('animals','q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animals = Manage::get();
        return view("manage/create", compact('animals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('public/images');
        }

        Manage::create($requestData);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animals = Manage::findOrFail($id);
        return view('manage/show', compact('animals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animals = Manage::findOrFail($id);
        return view('manage/edit', compact('animals'));
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
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('public/images');
        }

        $animals = Manage::findOrFail($id);

        $animals->update($requestData);

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manage::destroy($id);

        return redirect('home');
    }
}
