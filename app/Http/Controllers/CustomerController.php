<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    }
    public function save(Request $request){
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $gender = $request->gender;
        $phone = $request->phone;

        echo 'My Name Is : '.$name . '</br>' .'Your email : '.$email .'</br>'.'Your Sex : '.$gender .'</br>'.'Your Phone Number : '. $phone ;
        
    }
}
