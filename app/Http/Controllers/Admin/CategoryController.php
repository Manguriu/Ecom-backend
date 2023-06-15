<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoty;
use App\Models\Subcat;

class CategoryController extends Controller
{
    public function Allcategory(){
        $data = Categoty::all();
        $catdetailarray =[];


        // connecting two tables using name

        foreach ($data as  $value) {
            $subdata = Subcat::where('category_name',$value['category_name'])->get();

            $item=[
                'category_name'=> $value['category_name'],
                'category_image'=>$value['category_image'],
                'sub_cat' => $subdata ,
            ];
            array_push($catdetailarray,$item);

        }
        return $catdetailarray;

    }
}
