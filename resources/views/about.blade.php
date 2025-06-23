@extends('Layouts.app')
@section('content')
<h1>About</h1>
<hr>
   @foreach ($data as $user)
   <?php 
   echo "ID: " . $user["id"] . "<br>";
   echo "Name: " . $user["name"] . "<br>";
   echo "Email: " . $user["email"] . "<br>";
   echo "Age: " . $user["age"] . "<br><br>";
   
   ?>
       
   @endforeach
<p>Welcome to our website! We are dedicated to providing helpful information and quality services to our visitors. Our goal is to make your experience smooth, informative, and enjoyable. Thank you for visiting and being a part of our community.</p>

@endsection

