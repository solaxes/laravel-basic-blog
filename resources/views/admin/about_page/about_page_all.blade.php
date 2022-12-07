@extends('admin.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('about.page.update')}}" enctype="multipart/form-data">
                                @csrf
                                <h4 class="card-title">Edit About Page</h4>
                                <div class="row mb-3">
                                    <label for="namet" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" placeholder="" id="name" value="{{$aboutData->name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email" placeholder="" id="email" value="{{$aboutData->email}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="username" type="text" placeholder="" id="username" value="{{$aboutData->username}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">

                                        <input class="form-control" name="profile_image" type="file"  id="profile_image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img src="{{ !empty($aboutData->about_image) ? url('admin_images/' . $aboutData->about_image) : url('admin_images/no_image.png') }}" class="rounded avatar-x1" id="showImage" alt="Card image cap" width="100" height="100" />
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile" />
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

@section('jsCodes')
    <script type="text/javascript">
        $(function(){
            $('#profile_image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

