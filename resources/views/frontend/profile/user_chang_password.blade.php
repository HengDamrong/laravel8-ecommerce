@extends('frontend.main_master')
@section('content')

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
                        <strong>{{Auth::user()->name}}</strong> Chang Your Password
                    </h3><br>
                    <div class="card-body">

                        <form method="POST" action="{{route('user.password.update')}}">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Current Password</label>
                                <input id="current_password" type="password" name="oldpassword" class="form-control unicase-form-control text-input">
                                @error('oldpassword')
                                <span class="text-danger" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">New Password</label>
                                <input id="password" type="password" name="password" class="form-control unicase-form-control text-input">
                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Cormfirm Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control unicase-form-control text-input">
                                @error('password_confirmation')
                                <span class="text-danger" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-rounded btn-primary mb-5">Change</button>
                            </div>

                        </form><br>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
