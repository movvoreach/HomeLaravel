@extends('Layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('product.save') }}" method="POST">
        @csrf
        <p>
            <label>Name</label>
            <input type="text" name="product">
        </p>
        <p>
            <label>Qty</label>
            <input type="text" name="qty">
        </p>
        <p>
            <label>Price</label>
            <input type="text" name="price">
        </p>
        <p>
            <label>Dis</label>
            <input type="text" name="dis">
        </p>
        <p>
            <label>Total</label>
            <input type="text" name="total" value="{{ $total }}">
        </p>
        <button type="submit">Save</button>
    </form>
@endsection
