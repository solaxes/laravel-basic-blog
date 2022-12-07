<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class HomeSliderController extends Controller
{
    public function HomeSlider(){
        $homeSlide = HomeSlide::find(1);

        return view('admin.home_slide.home_slide_all', ['homeSlide'=> $homeSlide]);
    }

    public function updateSlider(Request $request){
        $slide_id = $request->id;

        if (  $request->file('slider_image')){
            $image = $request->file('slider_image');

            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();


            Image::make($image)->resize(636, 852)->save('upload/home_slide/' . $imageName);

            $save_url = 'upload/home_slide/' . $imageName;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => 'https://www.youtube.com/watch?v=2S8oVG6bwhc&ab_channel=PerfectWebSolutions',
                'home_slide' => $save_url
            ]);

            $notification = Array(
                'message' => 'Home slide updated with image successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else {
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url
            ]);

            $notification = Array(
                'message' => 'Home slide updated successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }


    }
}
