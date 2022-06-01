<?php

namespace App\Http\Controllers;

use App\Models\AcademicDegree;
use Illuminate\Http\Request;

class AcademicDegreesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('academic-degrees-mgmt.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'educational_qualification'=>'required|string|min:10|max:100',
            'college'=>'required|string|min:5|max:100',
            'college_major'=>'required|string|min:5|max:100',
            'graduation_date'=>'required',
            'details'=>'string|min:10|max:200',
        ]);


        $Degree=AcademicDegree::create($request->all());

        return redirect()->route('employees.edit',$request->employee_id)->with('success', 'Academic Degree has been added successfully');
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
