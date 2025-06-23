@extends('Layouts.app');
@section('content')
    <div class="container">
        <h1>Users List</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('crate.users') }}" class="btn btn-primary me-md-2">Create Users</a>
            {{-- <button class="btn btn-primary me-md-2" type="button">Button</button> --}}
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usersdata as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>
                            <a href=" {{ route('users.edit', $data->id) }}">Edit</a>
                            <form action="{{ route('users.delete',$data->id) }} " method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
