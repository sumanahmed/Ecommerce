<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view("admin.category.add-category");
    }
    public function saveCategory(Request $request){
        $category = new Category();

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect("add-category")->with('message', 'Category Save Successfully');
    }

    public function manageCategory(){
        $allCategories = Category::all();
        return view("admin.category.manage-category", ['allCategories' => $allCategories]);
    }
    public function unpublishedCategory($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('manage-category')->with('message', 'Category update Successfully');
    }

    public function publishedCategory($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('manage-category')->with('message', 'Category update successfully');
    }

    public function editCategory($id){
        $categoryById = Category::find($id);
        $categoryById->all();
        return view('admin.category.edit-category', ['categoryById' => $categoryById]);
    }

    public function updateCategory(Request $request){
        //$category = new Category();

        $categoryById = Category::find($request->category_id);
        $categoryById->category_name = $request->category_name;
        $categoryById->category_description = $request->category_description;
        $categoryById->publication_status = $request->publication_status;
        $categoryById->save();
        return redirect('/manage-category')->with("message", "Category update Successfully");
    }

    public function deleteCategory($id){
        $cateogryById = Category::find($id);
        $cateogryById->delete();
        return redirect('/manage-category')->with("message", "Category Delete Successfully");
    }

}








