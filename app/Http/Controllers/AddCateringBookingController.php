<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingDetails;

class AddCateringBookingController extends Controller
{
    public function addbookingform()
    {
        return view('add-booking');
    }

    public function addBooking(Request $request)
    {

        // Validate the form data
        $validatedData = $request->validate([
            'food_name' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'category' => 'required|string|in:Main Course,Appetizer,Dessert,Beverage', // Add more categories if needed
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);


        //upload image in public storage folder
        $path = $request->file('image')->store('public\images');
        $pathname = pathinfo($path)['basename'];

        $bookingData = [
            "BookingTheme" => $request->bookingtheme,
            "BookingType" => $request->bookingtype,
            "BookingDate" => $request->bookingdate,
            "CustomerName" => $request->customername,
            "CustomerEmail" => $request->customeremail,
            "PhoneNumber" => $request->phonenumber,
            "FoodOrderList" => $request->foodorderlist,
            "Status" => $request->status,
            "Remarks" => $request->remarks,
            "CustomerSign" => $request->customersign,
            "SignDate" => $request->signdate,

        ];
        BookingDetails::insert($bookingData);

      
        return redirect ('/')->with('status',"Item added successfully!");
    }



}
