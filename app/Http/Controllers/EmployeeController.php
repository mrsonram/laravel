<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use Faker\Extension\Helper;

class EmployeeController extends Controller
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
            $employees = Employee::where("name","like","%{$q}%")
                            ->orWhere("age", "like", "%{$q}%")
                            ->orWhere("address", "like", "%{$q}%")
                            ->orWhere("salary", "like", "%{$q}%")
                            ->get();;
        }
        else
        {
            $employees = Employee::get();
        }
        //Old Version
        // $data = ["employees" => $employees, "q" => $q];//Employee::getAll() ,];
        // return view('employee/index', $data);

        //New Version
        return view('employee/index', compact('employees','q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::get();
        return view("employee/create", compact('positions'));
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

        Employee::create($requestData);

        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee/show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$data = ["employee" => Employee::getItem($id),];
        //return view("employee/edit", $data);

        $employee = Employee::findOrFail($id);
        $positions = Position::get();
        return view('employee/edit', compact('employee', 'positions'));
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

        $employee = Employee::findOrFail($id);

        $employee->update($requestData);

        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);

        return redirect('employee');
    }
}
