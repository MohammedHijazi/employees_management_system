<!-- Modal -->
<div class="modal fade" id="addDegree" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" >
            <div class="modal-header" style="background:#605ca8;color:white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#fff">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">{{__('Add Degree')}}</h5>
            </div>
            <div class="modal-body" >
                <div class="panel panel-default">
                    <div class="panel-body" >
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('degrees.store') }}" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="employee_id" value="{{$employee->employee_id}}">

                            <div class="form-row">
                                <div class="col-md-5">
                                    <input id="educational_qualification" type="text" class="form-control" name="educational_qualification" value="{{ old('educational_qualification') }}"  autofocus placeholder="{{__('educational_qualification')}}">
                                    @if ($errors->has('educational_qualification'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('educational_qualification') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <br><br>

                                <div class="col-md-5">
                                    <input id="college" type="text" class="form-control" name="college" value="{{ old('college') }}"  placeholder="{{__('college')}}">

                                    @if ($errors->has('college'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('college') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <br><br>

                                <div class="col-md-5">
                                    <input id="college_major" type="text" class="form-control" name="college_major" value="{{ old('college_major') }}" placeholder="{{__('college_major')}}">

                                    @if ($errors->has('college_major'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('college_major') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <br><br>


                                <div class="col-md-5">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" value="{{ old('graduation_date') }}" name="graduation_date" class="form-control" id="graduation_date"  placeholder="{{__('graduation_date')}}" >
                                        @if ($errors->has('graduation_date'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('graduation_date') }}</strong>
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
                                <button type="submit" class="btn btn-primary">{{__('Save Degree')}}</button>
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

