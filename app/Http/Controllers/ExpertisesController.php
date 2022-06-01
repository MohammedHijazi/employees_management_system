<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertisesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'place_of_work' => 'required|max:100',
            'job_title' => 'required|max:100',
            'salary' => 'required|numeric|min:0|',
            'currency' => 'required|max:3|min:3',
            'start_date'=>'required|before:end_date|before:today',
            'end_date'=>'required|after:start_date',
            'details'=>'string|max:200',
        ]);

        $Expertise=Expertise::create($request->all());
        return redirect()->route('employees.edit',$request->employee_id)->with('success', 'Expertise has been added successfully');
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
