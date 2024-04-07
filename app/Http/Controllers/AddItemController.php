<?php

// app/Http/Controllers/AddItemController.php

namespace App\Http\Controllers;
use App\Models\Imagestore;
use Illuminate\Http\Request;


class AddItemController extends Controller
{
    public function additemform()
    {
        return view('add-item');
    }

    public function addItem(Request $request)
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
        $path = $request->file('image')->store('models/imagestore');
        $pathname=pathinfo($path)['basename'];
       
     
        $itemData = [
            "FoodName" => $request->food_name,
            "Category" => $request->category,
            "Price" => $request->price,
            "Code" => $request->code,
            "Image" => $pathname,
    ];

        Imagestore::insert( $itemData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Item added successfully!');
    }
}
