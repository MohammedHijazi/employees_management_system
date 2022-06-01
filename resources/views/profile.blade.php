<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User profile form requirement</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
    <!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        .othertop{margin-top:10px;}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <form class="form-horizontal">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Employee profile</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ID">ID</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user">
                                    </i>
                                </div>
                                <input value="{{$employee->employee_id}}" type="text" placeholder="ID" class="form-control input-md"  readonly>
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user">
                                    </i>
                                </div>
                                <input value="{{$employee->full_name}}"  type="text" placeholder="Name (Full name)" class="form-control input-md"  readonly>
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>
                        <div class="col-md-4">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-birthday-cake"></i>

                                </div>
                                <input value="{{$employee->birth_date}}"  type="text" placeholder="Date Of Birth" class="form-control input-md"  readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Date Of Birth">Date Of Hiring</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input value="{{$employee->hiring_date}}"  type="text" placeholder="Date Of Hiring" class="form-control input-md"  readonly>
                            </div>
                        </div>
                    </div>


                    <!-- Multiple Radios (inline) -->

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Gender">Gender</label>
                        <div class="col-md-4">
                            <label class="radio-inline" for="Gender-0">
                                <input type="radio" name="Gender" id="Gender-0" value="1" @if($employee->gender=='male') checked="checked" @endif disabled  >
                                Male
                            </label>
                            <label class="radio-inline" for="Gender-1">
                                <input type="radio" name="Gender" id="Gender-1" value="2" @if($employee->gender=='female') checked="checked" @endif disabled>
                                Female
                            </label>
                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Marital Status:</label>
                        <div class="col-md-4">
                            <label class="radio-inline" for="radios-0">
                                <input type="radio" name="radios" id="radios-0" @if($employee->social_status=='married') checked="checked" @endif disabled >
                                Married
                            </label>
                            <label class="radio-inline" for="radios-1">
                                <input type="radio" name="radios" id="radios-1" @if($employee->social_status=='single') checked="checked" @endif disabled>
                                Unmarried
                            </label>
                        </div>
                    </div>




                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Primary Occupation">Specialization</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-briefcase"></i>

                                </div>
                                <input value="{{$employee->specialization}}"  type="text" placeholder="Specialization" class="form-control input-md" readonly>
                            </div>


                        </div>
                    </div>



                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Phone number ">Phone number </label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input value="{{$employee->phone_number}}" type="text" placeholder="Phone number " class="form-control input-md" readonly>
                            </div>

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Phone number ">Mobile number </label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <input value="{{$employee->mobile_number}}" type="text" placeholder="Mobile number " class="form-control input-md" readonly>
                            </div>

                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Email Address">Email Address</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>

                                </div>
                                <input value="{{$employee->email}}" type="text" placeholder="Email Address" class="form-control input-md" readonly>

                            </div>

                        </div>
                    </div>



                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Overview (max 200 words)">Address</label>
                        <div class="col-md-4">
                            <textarea class="form-control" rows="2" readonly>{{$employee->address}}</textarea>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="col-md-2 hidden-xs">
            <img src="{{asset('storage/'.$employee->image_path)}}" class="img-responsive img-thumbnail ">
        </div>
    </div>
</div>

<!--------------------------------------------------------------------------------------------------------------------->

<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <form class="form-horizontal">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Academic Degrees</legend>

                    @foreach($academic_degrees as $degree)
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ID">Educational Qualification</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-book">
                                    </i>
                                </div>
                                <input value="{{$degree->educational_qualification}}" type="text" placeholder="Educational Qualification" class="form-control input-md"  readonly>
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="college">College</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-university">
                                    </i>
                                </div>
                                <input value="{{$degree->college}}"  type="text" placeholder="college" class="form-control input-md"  readonly>
                            </div>
                        </div>
                    </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="college">College Major</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-book">
                                        </i>
                                    </div>
                                    <input value="{{$degree->college_major}}"  type="text" placeholder="college_major" class="form-control input-md"  readonly>
                                </div>
                            </div>
                        </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Date Of Birth">Graduation Date</label>
                        <div class="col-md-4">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>

                                </div>
                                <input value="{{$degree->graduation_date}}"  type="text" placeholder="Graduation Date" class="form-control input-md"  readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Overview (max 200 words)">Details</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" readonly>{{$degree->details}}</textarea>
                        </div>
                    </div>

                        <br><br>
                @endforeach
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!--------------------------------------------------------------------------------------------------------------------->

<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <form class="form-horizontal">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Courses</legend>

                    @foreach($courses as $course)
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="ID">Course Name</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-book">
                                        </i>
                                    </div>
                                    <input value="{{$course->name}}" type="text" placeholder="Course Name" class="form-control input-md"  readonly>
                                </div>
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="college">Course Place</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow">
                                        </i>
                                    </div>
                                    <input value="{{$course->place}}"  type="text" placeholder="Course Place" class="form-control input-md"  readonly>
                                </div>
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Date Of Birth">Start Date</label>
                            <div class="col-md-4">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>

                                    </div>
                                    <input value="{{$course->start_date}}"  type="text" placeholder="Start Date" class="form-control input-md"  readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Date Of Birth">End Date</label>
                            <div class="col-md-4">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>

                                    </div>
                                    <input value="{{$course->end_date}}"  type="text" placeholder="End Date" class="form-control input-md"  readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Overview (max 200 words)">Details</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" readonly>{{$course->details}}</textarea>
                            </div>
                        </div>

                        <br><br>
                    @endforeach
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

</body>

</html>
