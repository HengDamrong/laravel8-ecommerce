@extends('admindashbord.admin_master')
@section('admin')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!--Search-->
                <div class="box bb-3 border-warning">
                    <div class="box-header">
                        <h4 class="box-title">Student <strong>Search</strong></h4>
                    </div>
                    <div class="box-body">
                        <form action="{{route('student.year.class.wise')}}" method="get">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Year<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <select name="year_id" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Year</option>
                                                @foreach($year as $row)
                                                <option value="{{$row->id}}" {{(@$year_id == $row->id)? "selected": ""}}>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> <!-- End Col Md-4 -->

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Class<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <select name="class_id" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Class</option>

                                                @foreach($class as $row)
                                                <option value="{{$row->id}}" {{(@$class_id == $row->id)? "selected": ""}}>{{$row->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div> <!-- End Col Md-4 -->
                                <div class="col-md-4" style="margin-top: 25px;">
                                    <input type="submit" class="btn btn-rounded btn-info mb-5" name="search" value="Search Student">
                                </div> <!-- End Col Md-4 -->

                            </div>
                            <!--end row-->
                        </form>
                    </div>
                </div>
                <!--endSearch-->
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">Student List</h3>
                        <a href="{{route('student.registration.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Student</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">

                            @if(!@search)
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Student Name</th>
                                        <th>ID NO</th>
                                        <th>Roll</th>
                                        <th>Year</th>
                                        <th>Class</th>
                                        <th>Image</th>
                                        @if(Auth::user()->role == "Admin")
                                        <th>Code</th>
                                        @endif
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($allData as $key => $row)
                                <tbody>
                                    <th>{{$key+1}}</th>
                                    <th>{{$row['student']['name']}}</th>
                                    <th>{{$row['student']['id_no']}}</th>
                                    <th></th>
                                    <th>{{$row['student_year']['name']}}</th>
                                    <th>{{$row['student_class']['name']}}</th>
                                    <th> <img src="{{ (!empty($row['student']['image']))? url('upload/student_images/'.$row['student']['image']):url('upload/no_image.jpg') }}" style="height: 45px; width: 60px; border: 1px solid #000000;border-radius: 10px;">
                                    </th>
                                    <th>{{$row['student']['code']}}</th>
                                    <td style="width: 22%;">
                                        <a href="{{route('student.registration.edit',$row->student_id)}}" class="btn btn-info">Update</a>
                                        <a id="delete" href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tbody>
                                @endforeach()
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Student Name</th>
                                        <th>ID NO</th>
                                        <th>Roll</th>
                                        <th>Year</th>
                                        <th>Class</th>
                                        <th>Image</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            @else
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Student Name</th>
                                        <th>ID NO</th>
                                        <th>Roll</th>
                                        <th>Year</th>
                                        <th>Class</th>
                                        <th>Image</th>
                                        @if(Auth::user()->role == "Admin")
                                        <th>Code</th>
                                        @endif
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($allData as $key => $row)
                                <tbody>
                                    <th>{{$key+1}}</th>
                                    <th>{{$row['student']['name']}}</th>
                                    <th>{{$row['student']['id_no']}}</th>
                                    <th></th>
                                    <th>{{$row['student_year']['name']}}</th>
                                    <th>{{$row['student_class']['name']}}</th>
                                    <th> <img src="{{ (!empty($row['student']['image']))? url('upload/student_images/'.$row['student']['image']):url('upload/no_image.jpg') }}" style="height: 45px; width: 60px; border: 1px solid #000000;border-radius: 10px;">
                                    </th>
                                    <th>{{$row['student']['code']}}</th>
                                    <td style="width: 20%;">
                                        <a title="Edit" href="{{route('student.registration.edit',$row->student_id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                        <a title="Promotion" href="{{route('student.registration.promotion',$row->student_id)}}" class="btn btn-primary"><i class="fa fa-check"></i></a>
                                        <a target="_blank" title="Details" href="{{ route('student.registration.details',$row->student_id) }}" class="btn btn-danger"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tbody>
                                @endforeach()
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Student Name</th>
                                        <th>ID NO</th>
                                        <th>Roll</th>
                                        <th>Year</th>
                                        <th>Class</th>
                                        <th>Image</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

</div>


@endsection
