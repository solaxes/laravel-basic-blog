@extends('admin.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ !empty($user->profile_image) ? url('admin_images/' .  $user->profile_image) : url('admin_images/no_image.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{$user->name}}</h4>
                            <hr/>
                            <p class="card-text">
                                Email : {{$user->email}}
                            </p>
                            <hr/>
                            <p class="card-text">
                                User Name : {{$user->username}}
                            </p>
                            <hr/>
                            <p class="card-text">
                                <small class="text-muted">Last updated {{$user->created_at->diffForHumans()}}</small>
                            </p>
                            <hr/>
                            <a href="{{route('admin.edit.profile')}}" class="btn btn-primary btn-rounded">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
