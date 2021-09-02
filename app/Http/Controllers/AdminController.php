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

        if(!empty($q))
        {
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
                            ->get();;
        }
        else
        {
            $animals = Admin::get()
                            ->sortBy("name");
        }

        return view('admin/manage', compact('animals', 'q'));
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
        $img = $request->file('image');
        if($img !='')
        {
            $img_gen = hexdec(uniqid());

                $img_exe = strtolower($img->getClientOriginalExtension());
                $img_name = $img_gen.'.'.$img_exe;

                $save = 'images/';
                $path = $save.$img_name;
        }

        Admin::insert([
            'name'=>$request->name,
            'type'=>$request->type,
            'species'=>$request->species,
            'marking'=>$request->marking,
            'gender'=>$request->gender,
            'collar'=>$request->collar,
            'age'=>$request->age,
            'status'=>$request->status,
            'vet'=>$request->vet,
            'owner'=>$request->owner,
            'image'=>$path,
        ]);
        $img->move($save, $img_name);
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
        $animals = Admin::findOrFail($id);
        return view('admin/show', compact('animals'));
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
        return view('admin/edit', compact('animals'));
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
        //$requestData = $request->all();

        //$animals = Admin::findOrFail($id);

        //$animals->update($requestData);

        //return redirect('manage');
        $img = $request->file('image');
            if ($img){
                $img_gen = hexdec(uniqid());
                $img_exe = strtolower($img->getClientOriginalExtension());
                $img_name = $img_gen.'.'.$img_exe;
                $save = 'images/';
                $path = $save.$img_name;

                Admin::find($id)->update([
                    'name'=>$request->name,
                    'type'=>$request->type,
                    'species'=>$request->species,
                    'marking'=>$request->marking,
                    'gender'=>$request->gender,
                    'collar'=>$request->collar,
                    'age'=>$request->age,
                    'status'=>$request->status,
                    'vet'=>$request->vet,
                    'owner'=>$request->owner,
                    'image'=>$path,
                ]);
                $img->move($save, $img_name);
                return redirect('manage');
            }

            else
            {
                Admin::find($id)->update([
                    'name'=>$request->name,
                    'type'=>$request->type,
                    'species'=>$request->species,
                    'marking'=>$request->marking,
                    'gender'=>$request->gender,
                    'collar'=>$request->collar,
                    'age'=>$request->age,
                    'status'=>$request->status,
                    'vet'=>$request->vet,
                    'owner'=>$request->owner,
                ]);
                return redirect('manage');
            }
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

        return redirect('manage');
    }
}
