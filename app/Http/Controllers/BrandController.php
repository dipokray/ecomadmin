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
        $this->validate($request,[
            'brand_name'=>'required|regex:/^[\pL\s\-]+$/u|max:15|min:2',
            'brand_description'=>'required',
            'publication_status'=>'required'

        ]);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/brand/add');

    }

    public function manageBrand(){
        $brands = Brand::all();
        return view('admin.brand.manage_brand',
            ['brands'=> $brands]);
    }
}
