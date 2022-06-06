@extends('employees-mgmt.base')

@extends('layouts.header')
@section('action-content')
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
                                    {{__('Update Family Member')}}</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal " role="form" method="POST" action="{{ route('families.update',$family_member->id) }}" enctype="multipart/form-data" >
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <input id="full_name" type="text" class="form-control" name="full_name" value="{{ $family_member->full_name }}"  autofocus placeholder="{{__('Full Name')}}">
                                            @if ($errors->has('full_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('full_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <br><br>

                                        <div class="col-md-4">
                                            <input readonly id="id_number" type="text" class="form-control" name="id_number" value="{{$family_member->id_number}}"  placeholder="{{__('ID Number')}}">

                                            @if ($errors->has('id_number'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('id_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <br><br>

                                        <div class="col-md-4">
                                            <input id="relation" type="text" class="form-control" name="relation" value="{{ $family_member->relation }}" placeholder="{{__('Relation')}}">

                                            @if ($errors->has('relation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('relation') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <br><br>

                                        <div class="col-md-4">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" value="{{ $family_member->birth_date }}" name="birth_date" class="form-control" id="f_birth_date"  placeholder="{{__('birth_date')}}" >
                                                @if ($errors->has('birth_date'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <br><br>


                                        <div class="col-md-4">
                                            <select class="form-control" name="social_status">
                                                <option disabled>{{__('Social Status')}}</option>
                                                <option {{$family_member->social_status == 'single' ? 'selected' : ''}} value="single">{{__('Single')}}</option>
                                                <option {{$family_member->social_status == 'married' ? 'selected' : ''}}value="married">{{__('Married')}}</option>
                                            </select>

                                            @if ($errors->has('social_status'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('social_status') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <br><br>

                                        <div class="col-md-4">
                                            <select class="form-control" name="study">
                                                <option disabled>Study status</option>
                                                <option {{$family_member->study == 'yes' ? 'selected' : ''}} value="yes">{{__('Yes')}}</option>
                                                <option {{$family_member->study == 'no' ? 'selected' : ''}} value="no">{{__('No')}}</option>
                                            </select>
                                            @if ($errors->has('study'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('study') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <br><br>
                                        <div class="col-md-4">
                                            <select class="form-control" name="works">
                                                <option disabled>Work status</option>
                                                <option {{$family_member->works == 'yes' ? 'selected' : ''}} value="yes">{{__('Yes')}}</option>
                                                <option {{$family_member->study == 'no' ? 'selected' : ''}} value="no">{{__('No')}}</option>
                                            </select>
                                            @if ($errors->has('works'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('works') }}</strong>
                                                </span>
                                            @endif
                                        </div>



                                        <div class="col-md-4" style="margin-top:-50px ">
                                            <img src="{{asset('storage/'.$family_member->id_image_path)}}" width="300px" height="300px"/>
                                            <input type="file" id="image" name="image" />
                                        </div>
                                        <br><br>
                                        <div class="col-md-12"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">{{__('Update Family Member')}}</button>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection

