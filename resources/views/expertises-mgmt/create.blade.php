<!-- Modal -->
<div class="modal fade" id="addExpertise" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" >
            <div class="modal-header" style="background:#605ca8;color:white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#fff">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">{{__('Add Expertise')}}</h5>
            </div>
            <div class="modal-body" >
                <div class="panel panel-default">
                    <div class="panel-body" >
                        <form id="expertise" class="form-horizontal" role="form" method="POST" action="{{ route('expertises.store') }}" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="employee_id" value="{{$employee->employee_id}}">

                            <div class="form-row">
                                <div class="col-md-5">
                                    <input id="place_of_work" type="text" class="form-control" name="place_of_work" value="{{ old('place_of_work') }}"  autofocus placeholder="{{__('Place of work')}}">
                                    @if ($errors->has('place_of_work'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('place_of_work') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <br><br>

                                <div class="col-md-5">
                                    <input id="job_title" type="text" class="form-control" name="job_title" value="{{ old('job_title') }}"  placeholder="{{__('Job title')}}">

                                    @if ($errors->has('job_title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <br><br>

                                <div class="col-md-5">
                                    <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="{{__('Salary')}}">

                                    @if ($errors->has('salary'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-3" style="width: 147px">
                                    <input id="currency" type="text" class="form-control" name="currency" value="{{ old('currency') }}" placeholder="{{__('Currency Code')}}">

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
                                        <input type="text" value="{{ old('start_date') }}" name="start_date" class="form-control" id="e_start_date"  placeholder="{{__('start_date')}}" >
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
                                        <input type="text" value="{{ old('end_date') }}" name="end_date" class="form-control" id="e_end_date"  placeholder="{{__('end_date')}}" >
                                        @if ($errors->has('end_date'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <br><br>
                                <div class="col-md-8">
                                    <textarea id="details" type="text" class="form-control" name="details" placeholder="{{__('details')}}" required></textarea>
                                    @if ($errors->has('details'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('details') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Close')}}</button>
                                <button type="submit" class="btn btn-primary">{{__('Save Expertise')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

