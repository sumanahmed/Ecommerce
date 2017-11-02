<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories' => $categories,
            'brands' => $brands
        ]);
    }


    public function saveProductInfo(Request $request){
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $productImage->move($directory, $imageName);
        $imgUrl = $directory.$imageName;


        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imgUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
        return redirect('add-product')->with('message', 'Product Info save successfully');

    }

    public function manageProductInfo(){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();
        return view('admin.product.manage-product', ['products' => $products]);
    }

    public function viewProductInfo($id){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->where('products.id', $id)
            ->first();
        return view('admin.product.view-product', ['products'=>$products]);
    }

    public function unpublishedProduct($id){
        $productById = Product::find($id);
        $productById->publication_status = 0;
        $productById->save();
        return redirect('manage-product')->with('message', 'Product update Successfully');
    }

    public function publishedProduct($id){
        $productById = Product::find($id);
        $productById->publication_status = 1;
        $productById->save();
        return redirect('manage-product')->with('message', 'Product update successfully');
    }

    public function editProductInfo($id){
        $products = Product::find($id);
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();

        return view('admin.product.edit-product',[
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
    public function updateProductInfo(Request $request){
        $product_image = $request->file('product_image');
        if($product_image){
            $productById = Product::find($request->product_id);
            unlink($productById->product_image);

            $productImage = $request->file('product_image');
            $imageName = $productImage->getClientOriginalName();
            $directory = 'product-images/';
            $productImage->move($directory, $imageName);
            $imgUrl = $directory.$imageName;

            $productById->category_id = $request->category_id;
            $productById->brand_id = $request->brand_id;
            $productById->product_name = $request->product_name;
            $productById->product_code = $request->product_code;
            $productById->product_quantity = $request->product_quantity;
            $productById->product_price = $request->product_price;
            $productById->short_description = $request->short_description;
            $productById->long_description = $request->long_description;
            $productById->product_image = $imgUrl;
            $productById->publication_status = $request->publication_status;
            $productById->save();


        }else{
            $productById = Product::find($request->product_id);
            $productById->category_id = $request->category_id;
            $productById->brand_id = $request->brand_id;
            $productById->product_name = $request->product_name;
            $productById->product_code = $request->product_code;
            $productById->product_quantity = $request->product_quantity;
            $productById->product_price = $request->product_price;
            $productById->short_description = $request->short_description;
            $productById->long_description = $request->long_description;
            $productById->product_image = $imgUrl;
            $productById->publication_status = $request->publication_status;
            $productById->save();
        }
        return redirect('manage-product')->with('message', 'Product update successfully');
    }

    public function deleteProductInfo($id){
        $productById = Product::find($id);
        unlink($productById->product_image);
        $productById->delete();
        return redirect('manage-product')->with('message', 'Product Delete successfully');
    }



}










