<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $sortBy = $request->get('sort_by', 'id');  // Default sort by 'id'
        $sortDirection = $request->get('sort_direction', 'asc');  // Default ascending

        $customer = CustomerModel::orderBy($sortBy, $sortDirection)->paginate(10);  // Paginate for large datasets

        return view('customer.index', compact('customer', 'sortBy', 'sortDirection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);

        if($request->has('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $path = 'uploads/';
            $filename = time().'.'.$extension;
            $file->move($path, $filename);
        }


        $data = $request->all();
        $data['photo'] = $path.$filename; // Add user_id from the authenticated user


        // Create the customer record
        CustomerModel::create($data);

        //CustomerModel::create($request->all());



        return redirect()->route('customer.index')->with('success', 'Receipt added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = CustomerModel::findOrFail($id);

        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = CustomerModel::findOrFail($id);

        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = CustomerModel::findOrFail($id);

        $customer->update($request->all());

        return redirect()->route('customer.index', ['id' => $customer->id])->with('success', 'Receipt updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = CustomerModel::findOrFail($id);

        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully');
    }
}
