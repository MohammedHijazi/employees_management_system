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
                                    {{__('Update Expertise')}}</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('expertises.update',$expertise->id) }}" enctype="multipart/form-data" >
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <input id="place_of_work" type="text" class="form-control" name="place_of_work" value=" {{$expertise->place_of_work}} "  autofocus placeholder="{{__('Place of work')}}">
                                            @if ($errors->has('place_of_work'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('place_of_work') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <br><br>

                                        <div class="col-md-5">
                                            <input id="job_title" type="text" class="form-control" name="job_title" value="{{$expertise->job_title}}"  placeholder="{{__('Job title')}}">

                                            @if ($errors->has('job_title'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('job_title') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <br><br>

                                        <div class="col-md-5">
                                            <input id="salary" type="text" class="form-control" name="salary" value="{{$expertise->salary}}" placeholder="{{__('Salary')}}">

                                            @if ($errors->has('salary'))
                                                <span class="help-block">
                                                         <strong>{{ $errors->first('salary') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3" style="width: 147px">
                                            <input id="currency" type="text" class="form-control" name="currency" value="{{ $expertise->currency }}" placeholder="{{__('Currency Code')}}">

                                            @if ($errors->has('currency'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('currency') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <br><br>


                                        <div class="col-md-5">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" value="{{$expertise->start_date}}" name="start_date" class="form-control" id="e_start_date"  placeholder="{{__('start_date')}}" >
                                                @if ($errors->has('start_date'))
                                                    <span class="help-block">
                                                            <strong>{{ $errors->first('start_date') }}</strong>
                                                         </span>
                                                @endif
                                            </div>
                                        </div>

                                        <br><br>

                                        <div class="col-md-5">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" value="{{$expertise->end_date}}" name="end_date" class="form-control" id="e_end_date"  placeholder="{{__('end_date')}}" >
                                                @if ($errors->has('end_date'))
                                                    <span class="help-block">
                                                            <strong>{{ $errors->first('end_date') }}</strong>
                                                         </span>
                                                @endif
                                            </div>
                                        </div>

                                        <br><br>
                                        <div class="col-md-8">
                                            <textarea id="details" type="text" class="form-control" name="details" placeholder="{{__('details')}}" required>{{$expertise->details}}</textarea>
                                            @if ($errors->has('details'))
                                                <span class="help-block">
                                                                <strong>{{ $errors->first('details') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">{{__('Update Expertise')}}</button>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection

