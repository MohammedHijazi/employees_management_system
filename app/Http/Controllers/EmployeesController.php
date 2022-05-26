<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get();

        return view('dashboard',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required|string|min:3|max:15',
            'second_name'=>'required|string|min:3|max:15',
            'third_name'=>'required|string|min:3|max:15',
            'last_name'=>'required|string|min:3|max:15',
            'employee_id'=>'required|integer|min:000000000|max:999999999|digits_between: 0,9',
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        return view('employees-mgmt.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee=Employee::findOrFail($id);

        $request->validate([
            'first_name'=>'required|string|min:3|max:15',
            'second_name'=>'required|string|min:3|max:15',
            'third_name'=>'required|string|min:3|max:15',
            'last_name'=>'required|string|min:3|max:15',
            'employee_id'=>'required|integer|min:000000000|max:999999999|digits_between: 0,9',
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

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', "Employee with ID ($employee->employee_id) updated.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employee::findOrFail($id);
        $employee->destroy($id);
        return redirect()->back()->with('success','Employee deleted successfully');

    }
}
