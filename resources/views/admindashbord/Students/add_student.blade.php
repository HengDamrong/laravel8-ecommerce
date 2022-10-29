@extends('admindashbord.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
    <section class="content">
        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Student</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="post" action="{{route('student.registration.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <!-- 1 Row -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Student Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Father's Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="fname" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Mother's Name<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="mname" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->
                                    </div> <!-- 1End Row -->

                                    <div class="row">
                                        <!-- 2 Row -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Mobile Number<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="mobile" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Address<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="address" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Gender<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="gender" id="gender" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->
                                    </div> <!-- 2End Row -->

                                    <div class="row">
                                        <!-- 3 Row -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Religion<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="religion" id="religion" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Religion</option>
                                                        <option value="Buddhists">Buddhists</option>
                                                        <option value="Christian">Christian</option>
                                                        <option value="Muslims">Muslims</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Date of Birth<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="dob" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Discount<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="discount" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                    </div> <!-- 3End Row -->

                                    <!-- 4 Row -->
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Year<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="year_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Year</option>
                                                        @foreach($year as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Class<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="class_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Class</option>

                                                        @foreach($class as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Group<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="group_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Group</option>

                                                        @foreach($group as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->



                                    </div> <!-- 4End Row -->

                                    <!-- 5 Row -->
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Shift<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="shift_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Shift</option>
                                                        @foreach($shift as $row)
                                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="image" class="form-control" id="image">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" style="width: 80px; width: 80px; border: 1px solid #000000;border-radius: 10px;">
                                                </div>
                                            </div>
                                        </div> <!-- End Col Md-4 -->
                                    </div> <!-- 5End Row -->
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
