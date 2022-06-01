<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('courses-mgmt.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50',
            'place' => 'required|max:100',
            'start_date'=>'required|before:end_date',
            'end_date'=>'required|after:start_date',
            'details'=>'string|max:200',
        ]);


        $Course=Course::create($request->all());

        return redirect()->route('employees.edit',$request->employee_id)->with('success', 'Course has been added successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
