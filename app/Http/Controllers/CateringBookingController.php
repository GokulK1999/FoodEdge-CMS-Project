<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateringBookingController extends Controller
{
    public function index()
    {

        //$itemData = ItemDetails::limit(9)->get();
        $path = storage_path('public\images');

        $data = [
            //"itemData" => $itemData,
            "Path" => $path,
            "route"=>"Home",
        ];
        return view('home.userpage', $data);
    }
    
    public function addbooking(){

    }
    public function deletebooking(){

    }
    public function updatebooking(){

    }
    public function editbooking(){
        
    }


}
