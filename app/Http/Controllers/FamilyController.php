<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
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
            'full_name'=>'required|string|min:3|max:40',
            'id_number'=>'required|integer|digits:9|digits_between: 0,9|unique:families,id_number',
            'relation'=>'required|string|min:3|max:15',
            'birth_date'=>'required|date|before:today',
            'social_status'=>'required|in:single,married',
            'study'=>'required|in:yes,no',
            'works'=>'required|in:yes,no',
            'image_path'=>'image',
        ]);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $id_image_path=$file->store('uploads',[
                'disk'=>'public'
            ]);
            $request->merge(['id_image_path'=>$id_image_path]);
        }

        Family::create($request->all());
        return redirect()->route('employees.edit',$request->employee_id)->with('success', 'Family member has been added successfully');


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
