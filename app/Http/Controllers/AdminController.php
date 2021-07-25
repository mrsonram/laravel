<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Faker\Extension\Helper;

class AdminController extends Controller
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
            $animals = Admin::where("animal_name", "like", "%{$q}%")
                            ->orWhere("animal_type", "like", "%{$q}%")
                            ->orWhere("animal_species", "like", "%{$q}%")
                            ->orWhere("animal_marking", "like", "%{$q}%")
                            ->orWhere("animal_collar", "like", "%{$q}%")
                            ->orWhere("animal_age", "like", "%{$q}%")
                            ->orWhere("animal_status", "like", "%{$q}%")
                            ->orWhere("animal_vet", "like", "%{$q}%")
                            ->orWhere("owner", "like", "%{$q}%")
                            ->orWhere("pictures", "like", "%{$q}%")
                            ->get();;
        }
        else
        {
            $animals = Admin::get();
        }
        //Old Version
        // $data = ["employees" => $employees, "q" => $q];//Employee::getAll() ,];
        // return view('employee/index', $data);

        //New Version
        return view('admin/manage', compact('animals','q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animals = Admin::get();
        return view("admin/create", compact('animals'));
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

        Admin::create($requestData);

        return redirect('manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Admin::findOrFail($id);
        return view('admin/show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Admin::findOrFail($id);
        return view('admin/edit', compact('animal'));
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

        $animal = Admin::findOrFail($id);

        $animal->update($requestData);

        return redirect('manage');
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

        return redirect('animal');
    }
}
