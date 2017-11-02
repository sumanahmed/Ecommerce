<?php
namespace App\Http\Controllers;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller{
    public function index(){
        $products = Product::where('publication_status', 1)->orderBy('id','desc')->take(4)->get();
        $sliders = Slider::where('publication_status', 1)->orderBy('id','desc')->take(4)->get();
        return view('front.home.home-content',[
            'products'=>$products,
            'sliders'=>$sliders
        ]);
    }

    public function category($id){
        $categoryProducts = Product::where('products.category_id', $id)
                ->where('publication_status', 1)
                ->orderBy('id','desc')
                ->get();
        return view('front.category.category-content',['categoryProducts'=>$categoryProducts]);
    }

    public function productDetails($id){
        $productById = Product::find($id);
        $relatedProducts = Product::where('category_id', $productById->category_id)->orderBy('id', 'desc')->take(4)->get();
        return view('front.product.product-details',[
            'productById'=>$productById,
            'relatedProducts'=>$relatedProducts
        ]);
    }
}








