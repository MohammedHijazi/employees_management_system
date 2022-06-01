@extends('employees-mgmt.base')

@extends('layouts.header')
@section('action-content')
    <section class="content" >
        <div class="box">
            <div class="box-header">
                @include('flash_message')
            </div>
            <div class="box-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 ">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red">
                                        {{__('Update employee')}}</h3>
                                    </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('employees.update',$employee->employee_id ) }}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                            <div class="col-md-3">
                                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $employee->first_name }}" required autofocus placeholder="First Name">

                                                @if ($errors->has('first_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        <div class="col-md-3">
                                            <input id="second_name" type="text" class="form-control" name="second_name" value="{{ $employee->second_name }}" required placeholder="Middle Name">
                                                @if ($errors->has('second_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('second_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-3">
                                                <input id="third_name" type="text" class="form-control" name="third_name" value="{{ $employee->third_name }}" required>

                                                @if ($errors->has('third_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('third_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-3">
                                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $employee->last_name }}" required>

                                                @if ($errors->has('last_name'))
                                                    <span class="help-block">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           <br>
                                         <br>
                                        <br>



                                        <div class="col-md-3" >
                                            <input id="employee_id" type="text" class="form-control" name="employee_id" value="{{ $employee->employee_id}}"  placeholder="Employee ID" readonly>

                                            @if ($errors->has('employee_id'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('employee_id') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <div class="col-md-5" >
                                            <input id="specialization" type="text" class="form-control" name="specialization" value="{{ $employee->specialization }}" placeholder="Specialization">

                                            @if ($errors->has('specialization'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('specialization') }}</strong>
                                                    </span>
                                            @endif
                                        </div>


                                        <br><br><br>
                                        <div class="col-md-4" >
                                            <input id="email" type="text" class="form-control" name="email" value="{{ $employee->email }}"  placeholder="Email">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <div class="col-md-4" >
                                            <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ $employee->mobile_number }}"  placeholder="Mobile number">

                                            @if ($errors->has('mobile_number'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <div class="col-md-4" >
                                            <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $employee->phone_number }}"  placeholder="Phone number">

                                            @if ($errors->has('phone_number'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                        <br><br><br>
                                            <div class="col-md-4">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" value="{{ $employee->birth_date }}" name="birth_date" class="form-control pull-right" id="birth_date" required>
                                                </div>
                                        </div>

                                            <div class="col-md-4">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" value="{{ $employee->hiring_date }}" name="hiring_date" class="form-control pull-right" id="hiring_date" required>
                                                </div>
                                        </div>
                                        <br><br><br>


                                        <div class="col-md-4">
                                            <select class="form-control" name="gender">
                                                <option disabled>Select Gender</option>
                                                <option {{$employee->gender == 'male' ? 'selected' : ''}} value="male"  >Male</option>
                                                <option {{$employee->gender == 'female' ? 'selected': ''}} value="female">Female</option>
                                            </select>
                                            @if ($errors->has('gender'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <div class="col-md-4">
                                            <select class="form-control" name="social_status">
                                                <option disabled>Social status</option>
                                                <option {{$employee->social_status == 'single' ? 'selected' : ''}} value="single">Single</option>
                                                <option {{$employee->social_status == 'married' ? 'selected' : ''}} value="married">Married</option>
                                            </select>

                                            @if ($errors->has('social_status'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('social_status') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                            <div class="col-md-4" style="margin-top:-50px ">
                                                <img src="{{asset('storage/'.$employee->image_path)}}" width="300px" height="300px"/>
                                                <input type="file" id="image" name="image" />
                                            </div>
                                        <div class="col-md-8" style="margin-top: -215px;">
                                            <textarea id="address" type="text" class="form-control" name="address"  required>{{ $employee->address }}</textarea>

                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                    <br><br><br><br>

                                        <div class="form-group pull-right">
                                            <div class="col-md-6 ">
                                                <button type="submit" class="btn btn-primary">
                                                   <i class="fa fa-refresh"> {{__('Update employee')}}</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#addDegree">
                                        <i class="fa fa-plus"></i> {{__('Add Academic Qualification')}}
                                    </button>
                                </div>
                                @include('academic-degrees-mgmt.create')
                            </div>

                            <div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#addCourse">
                                        <i class="fa fa-plus"></i> {{__('Add Course')}}
                                    </button>
                                </div>
                                @include('courses-mgmt.create')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

