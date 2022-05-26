@extends('employees-mgmt.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    @include('flash_message')
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif">List of Employees</h3>
        </div>
        <div class="col-sm-4">
          <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#addEmployee">
            <i class="fa fa-plus"></i> Add New Employee
          </button>
        </div>
        @include('employees-mgmt.create')
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>

    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-bordered table-dark">
            <thead>

              <tr>
                <th scope="col">Image</th>
                  <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Specialization</th>
                <th scope="col" rowspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($employees as $employee)
                <tr role="row" class="odd">
                  <td><img src="{{asset('storage/'.$employee->image_path)}}"  class="user-image" width="50px" height="50px"/></td>
                    <td class="hidden-xs">{{$employee->employee_id}}</td>
                  <td >{{ $employee->first_name }} {{$employee->second_name}} {{$employee->third_name}} {{$employee->last_name}} </td>
                  <td class="hidden-xs">{{$employee->specialization}}</td>
                  <td colspan="2">
                    <form class="row" method="POST" action="{{route('employees.destroy',$employee->employee_id)}}" onsubmit = "return confirm('Are you sure?')">
                        @csrf
                        @method('delete')
                        <a href="{{route('employees.edit',$employee->employee_id)}}" class="btn btn-info  btn-margin">
                          <i class="fa fa-edit "></i>
                        </a>
                         <button type="submit" class="btn btn-danger btn-margin">
                          <i class="fa fa-trash "></i>
                        </button>
                    </form>
                  </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  {{-- </div> --}}
@endsection
