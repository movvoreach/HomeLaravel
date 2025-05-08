<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Write About your Info
    public function About(){
        $data = [
            [
                "id" => 1,
                "name" => "Yea Vanuth",
                "email" => "Vanuth@example.com",
                "age" => 25
            ],
            [
                "id" => 2,
                "name" => "mov voreach",
                "email" => "movvoreach@example.com",
                "age" => 30
            ],
            [
                "id" => 3,
                "name" => "Mike ",
                "email" => "mike@example.com",
                "age" => 22
            ]
        ];
        
        return view('about',compact('data'));
    }
}
