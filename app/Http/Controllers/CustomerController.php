<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::paginate(2); // ✅ This is correct
        return view('customer', compact('customer'));
    }
    public function save(Request $request)
    {
        // Validate the request data (optional but recommended)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'gender' => 'required|string',
            'phone' => 'required',
        ]);

        // Create a new Customer instance and fill the data
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;

        // Save to database
        $customer->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Customer saved successfully!');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('edit', compact('customer')); // Correctly passes $customer to the view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'gender' => 'required',
            'phone' => 'required|string|max:20',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;
        $customer->save();

        return redirect()->route('customer')->with('success', 'Customer updated successfully!');
    }
    public function Delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->Delete();
        return redirect()->route('customer');
    }
}
