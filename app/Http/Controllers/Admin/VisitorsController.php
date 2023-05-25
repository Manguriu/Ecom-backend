<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorsController extends Controller
{
    public function Details(){
        $ip_address =$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Africa/Nairobi");
        $visit_time =date("h:i:sa");
        $visit_date =date("d-m-y");


        //insert the data to db using eloquent orm
        $result = Visitor::insert([
            'ip_address'=> $ip_address,
            'visit_time'=> $visit_time,
            'visit_date'=> $visit_date

        ]);

        return $result;

    }// end method
}
