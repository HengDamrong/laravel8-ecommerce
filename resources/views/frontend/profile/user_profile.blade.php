@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br>
                <img src="{{ (!empty($user->profile_photo_path))?asset('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" class="card-img-top" style="border-radius:50% ;height: 100%;width: 100%;">
                <ul class="list-group list-group-flush"><br>
                    <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{route('chang.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">

                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Hi...</span>
                        <strong>{{Auth::user()->name}}</strong> Update Your Profile
                    </h3><br>
                    <div class="card-body">

                        <form method="POST" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control unicase-form-control text-input">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control unicase-form-control text-input">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone</label>
                                <input type="text" name="phone" value="{{$user->phone}}" class="form-control unicase-form-control text-input">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <h5>Profile Image<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input id="image" type="file" name="profile_photo_path" class="form-control unicase-form-control text-input">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img id="showImage" src="{{ (!empty($user->profile_photo_path))?asset('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" style="width:90px;height:90px;border-radius:10px ;">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-rounded btn-primary mb-5">Update</button>
                            </div>

                        </form><br>
                    </div>


                </div>
            </div>
        </div>
    </div>
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
