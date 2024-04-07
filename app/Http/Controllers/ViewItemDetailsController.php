<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagestore;

class ViewItemDetailsController extends Controller
{
    public function viewItemDetails()
    {
    
      $itemData= Imagestore::where("ID",3)->get();
      
     $data=["itemData"=>$itemData];
  
        return view('item-details',$data);
    }
}