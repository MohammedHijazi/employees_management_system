<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeesController extends Controller
{

    public function index()
    {
        $employees = Employee::get();

        return view('dashboard',compact('employees'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required|string|min:3|max:15',
            'second_name'=>'required|string|min:3|max:15',
            'third_name'=>'required|string|min:3|max:15',
            'last_name'=>'required|string|min:3|max:15',
            'employee_id'=>'required|integer|min:000000000|max:999999999|digits_between: 0,9|unique:employees,employee_id',
            'email'=>'required|email:rfc,dns',
            'address'=>'required|min:5|max:200',
            'mobile_number'=>'required',
            'phone_number'=>'required',
            'birth_date'=>'required',
            'hiring_date'=>'required',
            'specialization'=>'required|string|min:3|max:100',
            'social_status'=>'required|in:single,married',
            'gender'=>'required|in:male,female',
            'image_path'=>'image',
        ]);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image_path=$file->store('uploads',[
                'disk'=>'public'
            ]);
            $request->merge(['image_path'=>$image_path]);
        }
        //hence I have to run php artisan storage:link command to make the image_path work

        Employee::create($request->all());
        return redirect()->back()->with('success','Employee added successfully');

    }


    public function show($id)
    {

        $employee = Employee::findOrFail($id);
        return view('profile',[
            'employee'=>$employee
        ]);
    }


    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        return view('employees-mgmt.edit',compact('employee'));
    }


    public function update(Request $request, $id)
    {
        $employee=Employee::findOrFail($id);

        $request->validate([
            'first_name'=>'required|string|min:3|max:15',
            'second_name'=>'required|string|min:3|max:15',
            'third_name'=>'required|string|min:3|max:15',
            'last_name'=>'required|string|min:3|max:15',
            'email'=>'required|email:rfc,dns',
            'address'=>'required|min:5|max:200',
            'mobile_number'=>'required',
            'phone_number'=>'required',
            'birth_date'=>'required',
            'hiring_date'=>'required',
            'specialization'=>'required|string|min:3|max:100',
            'social_status'=>'required|in:single,married',
            'gender'=>'required|in:male,female',
            'image_path'=>'image',
        ]);
        if($request->hasFile('image')){
            Storage::disk('public')->delete($employee->image_path);
            $file=$request->file('image');
            $image_path=$file->store('uploads',[
                'disk'=>'public'
            ]);
            $request->merge(['image_path'=>$image_path]);
        }

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', "Employee with ID ($employee->employee_id) updated.");

    }


    public function destroy($id)
    {
        $employee=Employee::findOrFail($id);
        $employee->destroy($id);
        Storage::disk('public')->delete($employee->image_path);
        return redirect()->back()->with('success','Employee deleted successfully');

    }
}
