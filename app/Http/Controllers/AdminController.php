<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $q = $request->input('q');

        if (!empty($q)) {
            $animals = Admin::where("name", "like", "%{$q}%")
                ->orWhere("type", "like", "%{$q}%")
                ->orWhere("species", "like", "%{$q}%")
                ->orWhere("marking", "like", "%{$q}%")
                ->orWhere("gender", "like", "%{$q}%")
                ->orWhere("collar", "like", "%{$q}%")
                ->orWhere("age", "like", "%{$q}%")
                ->orWhere("status", "like", "%{$q}%")
                ->orWhere("vet", "like", "%{$q}%")
                ->orWhere("owner", "like", "%{$q}%")
                ->orWhere("location", "like", "%{$q}%")
                ->get();;
        }

        else {
            $animals = Admin::get()
                ->sortBy("name");
        }

        return view('admin/dogs/dog', compact('animals', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animals = Admin::get();

        return view('admin/dogs/create', compact('animals'));
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
                ->store('images', 'public');
        }

        Admin::create($requestData);

        return redirect('dog')->with('flash_message', 'Book added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animals = Admin::findOrFail($id);

        return view('admin/dogs/show', compact('animals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animals = Admin::findOrFail($id);

        return view('admin/dogs/edit', compact('animals'));
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
                ->store('images', 'public');
        }

        $animals = Admin::findOrFail($id);
        $animals->update($requestData);

        return redirect('dog')->with('ข้อความ', 'อัพเดตข้อมูลแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);

        return redirect('dog');
    }
}
