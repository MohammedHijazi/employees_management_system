<!-- Modal -->
<div class="modal fade" id="addFamily" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" >
            <div class="modal-header" style="background:#605ca8;color:white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:#fff">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">{{__('Add family member')}}</h5>
            </div>
            <div class="panel-heading">
                <h3 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red">{{__('New Family Member Portal')}} </h3>
            </div>
            <form class="form-horizontal " role="form" method="POST" action="{{ route('families.store') }}" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="employee_id" value="{{$employee->employee_id}}">
                <div class="form-row">
                    <div class="col-md-5">
                        <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}"  autofocus placeholder="{{__('Full Name')}}">
                        @if ($errors->has('full_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <br><br>

                    <div class="col-md-4">
                        <input id="id_number" type="text" class="form-control" name="id_number" value="{{ old('id_number') }}"  placeholder="{{__('ID Number')}}">

                        @if ($errors->has('id_number'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('id_number') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <br><br>

                    <div class="col-md-4">
                        <input id="relation" type="text" class="form-control" name="relation" value="{{ old('relation') }}" placeholder="{{__('Relation')}}">

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
                            <input type="text" value="{{ old('birth_date') }}" name="birth_date" class="form-control" id="f_birth_date"  placeholder="{{__('birth_date')}}" >
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
                            <option selected disabled>{{__('Social Status')}}</option>
                            <option value="single">{{__('Single')}}</option>
                            <option value="married">{{__('Married')}}</option>
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
                            <option selected disabled>Study status</option>
                            <option value="yes">{{__('Yes')}}</option>
                            <option value="no">{{__('No')}}</option>
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
                            <option selected disabled>Work status</option>
                            <option value="yes">{{__('Yes')}}</option>
                            <option value="no">{{__('No')}}</option>
                        </select>
                        @if ($errors->has('works'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('works') }}</strong>
                                    </span>
                        @endif
                    </div>



                    <div class="col-md-4">
                        <input type="file" id="image" name="image" >
                    </div>
                    <br><br>
                    <div class="col-md-12"></div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Close')}}</button>
                <button type="submit" class="btn btn-primary">{{__('Save Family Member')}}</button>
            </div>
            </form>
        </div>
    </div>
</div>
