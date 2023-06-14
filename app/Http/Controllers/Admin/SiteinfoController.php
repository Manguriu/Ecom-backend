<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfo;

class SiteinfoController extends Controller
{
    public function AllSite(){

        $result =SiteInfo::get();
        return $result;

    }

}
