@extends('admindashbord.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Profile Edit</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <h5>Admin User Name<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" value="{{$adminData->name}}" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <h5>Admin Email<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="email" name="email" value="{{$adminData->email}}" class="form-control">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <h5>Profile Image<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input id="image" type="file" name="profile_photo_path" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img id="showImage" src="{{ (!empty($adminData->profile_photo_path))?asset('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" style="width:90px;height:90px;border-radius:10px ;">
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                    </div>
                </form>


            </div>
            <!-- /.box-body -->
        </div>

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
