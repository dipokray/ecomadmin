<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add_category');
    }

    public function saveCategory(Request $request){
      $category = new Category();
      $category->category_name= $request->category_name;
        $category->category_description= $request->category_description;
        $category->publication_status= $request->publication_status;
        $category->save();

        //Category::create($request->all());
        return redirect('/add/category')->with('massage','Category Info Saved');

    }

    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manage',
            ['categories'=>$categories]);
    }
    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit-category',['category'=>$category]);
    }
    public function updateCategory(Request $request){

        $category = Category::find($request->id);

        $category->category_name= $request->category_name;
        $category->category_description= $request->category_description;
        $category->publication_status= $request->publication_status;
        $category->save();
        return redirect('/category/manage')->with('massage','Category Info Updated');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage');
    }

}
