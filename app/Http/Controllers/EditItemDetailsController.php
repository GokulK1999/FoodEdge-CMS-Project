<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemDetails;

class EditItemDetailsController extends Controller
{
    public function editItemDetails()
    {

     $id=$_GET['id'];

     $itemData = ItemDetails::where('ID',$id)->get();
      
     $data=["itemData"=>$itemData];
  
        return view('edit-item-details',$data);
    }
}