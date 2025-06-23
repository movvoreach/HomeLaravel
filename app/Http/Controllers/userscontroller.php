<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersdata = users::all();
        return view('users.index', compact('usersdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usersdata = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Dump validated data  dd($users);

        $users = new users();
        $users->name = $usersdata['name'];
        $users->email = $usersdata['email'];
        $users->address = $usersdata['address'];
        $users->phone = $usersdata['phone'];
        $users->save();

        return redirect()->route('index.view');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $usersdata = findOrfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = users::findOrFail($id); // Fetch a single user by ID
        return view('users.edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $customer = users::findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();

        return redirect()->route('index.view');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function Delete($id)
    {
        $customer = users::findOrFail($id);
        $customer->delete();
        return redirect()->route('index.view');
    }
}
