<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;

class ProductListController extends Controller
{
    public function AllProductsremark(Request $request){

        $remark = $request->remark;
        $productlist = ProductList::where('remark',$remark)->get();

        return $productlist;

    }


    public function AllProductscategory(Request $request){
        $category = $request->category;
        $productcategory = ProductList::where('category',$category)->get();

        return $productcategory;


    }

    public function AllProductssubcategory(Request $request){

        $category = $request->category;
        $subcategory = $request->sub_category;
        $productsubcategory = ProductList::where('category',$category)->where('sub_category',$subcategory)->get();

        return $productsubcategory;
    }
}
