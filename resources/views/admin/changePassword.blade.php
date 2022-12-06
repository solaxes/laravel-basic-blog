@extends('admin.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('update.password')}}" enctype="multipart/form-data">
                                @csrf
                                <h4 class="card-title">Change Password Page</h4>
                                <hr/>

                                @if(count($errors))
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li> {{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row mb-3">
                                    <label for="namet" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="oldpassword" type="password" placeholder=""
                                               id="oldpassword" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="namet" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="newpassword" type="password" placeholder=""
                                               id="newpassword" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="namet" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="confirmpassword" type="password"
                                               placeholder="" id="confirmpassword" value="">
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                       value="Update Profile"/>
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
        $(function () {
            $('#profile_image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
