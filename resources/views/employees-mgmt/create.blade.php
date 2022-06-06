 <!-- Modal -->
 <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header" style="background:#605ca8;color:white">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" style="color:#fff">&times;</span>
                 </button>
                 <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">{{__('Add employee')}}</h5>
             </div>
             <div class="modal-body">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red">{{__('New employee Portal')}} </h3>
                     </div>
                     <div class="panel-body">
                         <form class="form-horizontal" role="form" method="POST" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                             @csrf

                             <div class="form-row">
                                 <div class="col-md-3">
                                     <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" autofocus placeholder="{{__('first_name')}}">
                                     @if ($errors->has('first_name'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('first_name') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <div class="col-md-3">
                                     <input id="second_name" type="text" class="form-control" name="second_name" value="{{ old('second_name') }}" placeholder="{{__('second_name')}}">

                                     @if ($errors->has('second_name'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('second_name') }}</strong>
                                     </span>
                                     @endif
                                 </div>
                                 <div class="col-md-3">
                                     <input id="third_name" type="text" class="form-control" name="third_name" value="{{ old('third_name') }}" placeholder="{{__('third_name')}}">

                                     @if ($errors->has('third_name'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('third_name') }}</strong>
                                     </span>
                                     @endif
                                 </div>
                                 <div class="col-md-3">
                                     <input id="lastname" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="{{__('last_name')}}">

                                     @if ($errors->has('last_name'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('last_name') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <br><br>

                                 <div class="col-md-4">
                                     <input id="employee_id" type="text" class="form-control" name="employee_id" value="{{ old('employee_id') }}" placeholder="{{__('employee_id')}}">

                                     @if ($errors->has('employee_id'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('employee_id') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <div class="col-md-4">
                                     <input id="specialization" type="text" class="form-control" name="specialization" value="{{ old('specialization') }}" placeholder="{{__('specialization')}}">

                                     @if ($errors->has('specialization'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('specialization') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <div class="col-md-4">
                                     <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="{{__('address')}}">

                                     @if ($errors->has('address'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('address') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <br><br>
                                 <div class="col-md-4">
                                     <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{__('email')}}">

                                     @if ($errors->has('email'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <div class="col-md-4">
                                     <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" placeholder="{{__('mobile_number')}}">

                                     @if ($errors->has('mobile_number'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('mobile_number') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <div class="col-md-4">
                                     <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="{{__('phone_number')}}">

                                     @if ($errors->has('phone_number'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('phone_number') }}</strong>
                                     </span>
                                     @endif
                                 </div>

                                 <br><br>
                                 <div class="col-md-4">
                                     <div class="input-group date">
                                         <div class="input-group-addon">
                                             <i class="fa fa-calendar"></i>
                                         </div>
                                         <input type="text" value="{{ old('birth_date') }}" name="birth_date" class="form-control" id="birth_date" placeholder="{{__('birth_date')}}">
                                         @if ($errors->has('birth_date'))
                                         <span class="help-block">
                                             <strong>{{ $errors->first('birth_date') }}</strong>
                                         </span>
                                         @endif
                                     </div>
                                 </div>

                                 <div class="col-md-4">
                                     <div class="input-group date">
                                         <div class="input-group-addon">
                                             <i class="fa fa-calendar"></i>
                                         </div>
                                         <input type="text" value="{{ old('hiring_date') }}" name="hiring_date" class="form-control pull-right" id="hiring_date" placeholder="{{__('hiring_date')}}">
                                         @if ($errors->has('hiring_date'))
                                         <span class="help-block">
                                             <strong>{{ $errors->first('hiring_date') }}</strong>
                                         </span>
                                         @endif
                                     </div>
                                 </div>
                                 <br><br>
                                 <div class="col-md-4">
                                     <select class="form-control" name="gender">
                                         <option selected disabled>{{__('Select')}} {{__('Gender')}}</option>
                                         <option value="male">{{__('Male')}}</option>
                                         <option value="female">{{__('Female')}}</option>
                                     </select>
                                     @if ($errors->has('gender'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('gender') }}</strong>
                                     </span>
                                     @endif
                                 </div>

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

                                 <div class="col-md-4">
                                     <input type="file" id="image" name="image">
                                 </div>
                                 <br><br>
                                 <div class="col-md-12"></div>
                             </div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Close')}}</button>
                 <button type="submit" class="btn btn-primary">{{__('Save Employee')}}</button>
             </div>
             </form>
         </div>
     </div>
 </div>