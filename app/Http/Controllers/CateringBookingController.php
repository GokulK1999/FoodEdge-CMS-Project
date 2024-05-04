<?php

namespace App\Http\Controllers;

use App\Models\BookingDetails;
use Illuminate\Http\Request;

class CateringBookingController extends Controller
{
    public function index()
    {


        return view('booking.index');
    }

    public function addbooking()
    {
    }
    public function editbooking()
    {
        $id = $_GET['id'];

        $bookingData = BookingDetails::where('Booking ID', $id)->get();

        $data = ["bookingData" => $bookingData];

        return view('edit-item-details', $data);
    }

    public function deletebooking($id)
    {
        $bookingData = BookingDetails::find ($id);
        $bookingData->delete();
        return redirect ('/')->with('status',"Product has been delete succesfully");
    }
    public function updatebooking()
    {
    }
}
