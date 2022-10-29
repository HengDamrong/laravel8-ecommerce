@extends('admindashbord.admin_master')
@section('admin')
<div class="content-wrapper">
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Change Password</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <form method="POST" action="{{route('update.change.password')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <h5>Current Password<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input id="current_password" type="password" name="oldpassword" class="form-control">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <h5>New Password<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input id="password" type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <h5>Confrim Password<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
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


@endsection
