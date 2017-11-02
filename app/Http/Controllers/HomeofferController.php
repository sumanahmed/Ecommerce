<?php

namespace App\Http\Controllers;
use App\Homeoffer;
use Illuminate\Http\Request;

class HomeofferController extends Controller
{
    public function addHomeOffer(){
        return view('admin.offer.add-offer');
    }
    public function saveHomeOffer(Request $request){
        $bigImage = $request->file('big_image');
        $midImage = $request->file('mid_image');
        $smallOneImage = $request->file('small_one_image');
        $smallTwoImage = $request->file('small_two_image');

        $bigImage = $request->file('big_image');
        $imageName = $bigImage->getClientOriginalName();
        $directory = 'home-add-images/';
        $bigImage->move($directory, $imageName);
        $imgUrl1 = $directory.$imageName;

        $midImage = $request->file('mid_image');
        $imageName = $midImage->getClientOriginalName();
        $directory = 'home-add-images/';
        $midImage->move($directory, $imageName);
        $imgUrl2 = $directory.$imageName;

        $smallOneImage = $request->file('small_one_image');
        $imageName = $smallOneImage->getClientOriginalName();
        $directory = 'home-add-images/';
        $smallOneImage->move($directory, $imageName);
        $imgUrl3 = $directory.$imageName;

        $smallTwoImage = $request->file('small_two_image');
        $imageName = $smallTwoImage->getClientOriginalName();
        $directory = 'home-add-images/';
        $smallTwoImage->move($directory, $imageName);
        $imgUrl4 = $directory.$imageName;

        $homeOffer = new Homeoffer();
        $homeOffer->big_image = $imgUrl1;
        $homeOffer->big_image_percent = $request->big_image_percent;
        $homeOffer->big_image_title = $request->big_image_title;
        $homeOffer->mid_image = $imgUrl2;
        $homeOffer->mid_image_title = $request->mid_image_title;
        $homeOffer->small_one_image = $imgUrl3;
        $homeOffer->small_one_title = $request->small_one_title;
        $homeOffer->small_two_image = $imgUrl4;
        $homeOffer->small_two_title = $request->small_two_title;
        $homeOffer->save();

        return view('admin.offer.add-offer')->with('message','Home offer save successfully');
    }



}
