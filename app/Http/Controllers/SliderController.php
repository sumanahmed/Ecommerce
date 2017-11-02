<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function addSliderInfo(){
        return view('admin.slider.add-slider');
    }

    public function saveSliderInfo(Request $request){
        $sliderImage = $request->file('slider_img');
        $imageName = $sliderImage->getClientOriginalName();
        $directory = 'slider-image/';
        $sliderImage->move($directory,$imageName);
        $imgUrl = $directory.$imageName;

        $slider = new Slider();
        $slider->slider_img = $imgUrl;
        $slider->publication_status = $request->publication_status;
        $slider->save();
        return redirect('add-slider')->with('message', 'Slider Info save successfully');
    }

    public function manageSliderInfo(){
        $sliders = Slider::all();
        return view('admin.slider.manage-slider', [ 'sliders'=> $sliders ]);
    }

    public function unpublishedSliderInfo($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 0;
        $sliderById->save();
        return redirect('manage-slider')->with('message', 'Slider Unpublished Successfully');
    }

    public function publishedSliderInfo($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 1;
        $sliderById->save();
        return redirect('manage-slider')->with('message', 'Slider Published Successfully');
    }

    public function editSliderInfo($id){
        $sliderById = Slider::find($id);
        $sliderById->all();
        return view('admin.slider.edit-slider', ['sliderById'=>$sliderById]);
    }

    public function updateSliderInfo(Request $request){
        $slider_image = $request->file('slider_img');
        if($slider_image){
            $sliderById = Slider::find($request->slider_id);
            unlink($sliderById->slider_img);

            $sliderImage = $request->file('slider_img');
            $imageName = $sliderImage->getClientOriginalName();
            $directory = 'slider-image/';
            $sliderImage->move($directory,$imageName);
            $imgUrl = $directory.$imageName;

            $sliderById->slider_img = $imgUrl;
            $sliderById->publication_status = $request->publication_status;
            $sliderById->save();
            return redirect('manage-slider')->with('message', 'Slider Info update Successfully');
        }
    }

    public function deleteSliderInfo($id){
        $sliderById = Slider::find($id);
        unlink($sliderById->slider_img);
        $sliderById->delete();
        return redirect('manage-slider')->with('message', 'Slider Deleted Successfully');
    }
}
