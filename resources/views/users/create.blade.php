@extends('Layouts.app')
@section('content')
    <div class="container">
        <h1>Create users</h1>
        <form action="{{ route('crate.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">phone</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="phone">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save </button>
            <a href="{{ route('index.view')}}" type="submit" class="btn btn-primary">Back </a>
        </form>
    </div>
@endsection
