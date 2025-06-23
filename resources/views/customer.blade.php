@extends('Layouts.app')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        padding: 20px;
    }

    h1 {
        color: #333;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 30px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        max-width: 400px;
    }

    form input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-top: 4px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    form button {
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    form button:hover {
        background-color: #218838;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    table th, table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f0f0f0;
    }

    td a, td button {
        margin-right: 10px;
    }

    td form {
        display: inline;
    }

    .pagination {
        margin-top: 20px;
    }

    .pagination .page-link {
        padding: 8px 12px;
        margin: 0 2px;
        color: #007bff;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        text-decoration: none;
    }

    .pagination .active .page-link {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
</style>


@section('content')

<hr>

<h1>Create Customer</h1>
<form action="{{ route('customer.save') }}" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name"> <br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email"> <br>

    <label for="phone">Phone</label><br>
    <input type="text" name="phone" id="phone"> <br>

    <label for="gender">Gender</label><br>
    <input type="text" name="gender" id="gender"> <br>

    <button type="submit">Save</button>
</form>

<h1>Customer List</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    @foreach ($customer as $c)
    <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->gender }}</td>
        <td>{{ $c->phone }}</td>
        <td>
            <a href="{{ route('customer.edit', $c->id) }}">Edit</a>
            <form action="{{ route('customer.delete', $c->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                    onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<div class="pagination-wrapper">
    {{ $customer->links() }}
</div>

@endsection
