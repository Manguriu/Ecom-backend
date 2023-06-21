<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\ProductDetails;

class ProductDeController extends Controller
{
    public function Description(Request $request){

        //linking two tables using id as the primary key => Product_id and the id

        $id = $request ->id;
        $productdetails = ProductDetails::where('product_id',$id)->get();
        $productlist = ProductList::where('id',$id)->get();

        //associative array
        $item=[
            'productdetails'=>$productdetails,
            'productlist'=>$productlist
        ];

        return $item;

    }
};
