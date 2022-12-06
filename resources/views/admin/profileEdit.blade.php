@extends('admin.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <form method="post" action="{{route('admin.edit.profile')}}">
                            @csrf
                            <h4 class="card-title">Edit Profile Page</h4>
                            <div class="row mb-3">
                                <label for="namet" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="name" type="text" placeholder="" id="name" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="email" type="email" placeholder="" id="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="username" type="text" placeholder="" id="username" value="{{$user->username}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">

                                    <input class="form-control" name="profile_image" type="file"  id="profile_image" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('backend/assets/images/small/img-5.jpg') }}" class="rounded avatar-x1" alt="Card image cap" width="100" height="100" />
                                </div>
                            </div>
                                 <input type="submit" class="btn btn-info waves-effect waves-light" value="Submit" />
                        </form>
                            <!-- end row -->

                            <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
