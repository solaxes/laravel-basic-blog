
@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('home.slide.store')}}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$homeSlide->id}}" />
                            <h4 class="card-title">Home Slide Page</h4>
                            <hr/>
                            <div class="row mb-3">
                                <label for="namet" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="title" type="text" placeholder="" id="title" value="{{$homeSlide->title}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="short_title" type="text" placeholder="" id="short_title" value="{{$homeSlide->short_title}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Video Url</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="video_url" type="text" placeholder="" id="video_url" value="{{$homeSlide->video_url}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label">Slider Image</label>
                                <div class="col-sm-10">

                                    <input class="form-control" name="slider_image" type="file"  id="slider_image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img src="{{ !empty($homeSlide->home_slide) ? url( $homeSlide->home_slide) : url('upload/no_image.png') }}" class="rounded avatar-x1" id="showImage" alt="Card image cap" width="100" height="100" />
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide" />
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
        $('#slider_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }

            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
