<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }

    public function saveBrand(Request $request){
        $brand = new Brand();
        $brand->brand_name  = $request->brand_name;
        $brand->brand_description  = $request->brand_description;
        $brand->publication_status  = $request->publication_status;
        $brand->save();
        return redirect('add-brand')->with('message', 'Brand Save Successfully');
    }

    public function manageBrand(){
        $allBrands = Brand::all();
        return view('admin.brand.manage-brand', ['allBrands' => $allBrands]);
    }

    public function unpublishedBrand($id){
        $brandById = Brand::find($id);
        $brandById->publication_status = 0;
        $brandById->save();
        return redirect('manage-brand')->with('message', 'Brand Unpublished Successfully');
    }
    public function publishedBrand($id){
        $brandById = Brand::find($id);
        $brandById->publication_status = 1;
        $brandById->save();
        return redirect('manage-brand')->with('message', 'Brand Published Successfully');
    }
    public function editBrand($id){
        $brandById = Brand::find($id);
        $brandById->all();
        return view('admin.brand.edit-brand', ['brandById' => $brandById]);
    }
    public function updateBrand(Request $request){
        $brandById = Brand::find($request->brand_id);
        $brandById->brand_name = $request->brand_name ;
        $brandById->brand_description = $request->brand_description ;
        $brandById->publication_status = $request->publication_status ;
        $brandById->save();
        return redirect('/manage-brand')->with('message', 'Brand update Successfully');
    }

    public function deleteBrand($id){
        $brandById = Brand::find($id);
        $brandById->delete();
        return redirect('manage-brand')->with('message', 'Brand Delete Successfully');
    }
}
