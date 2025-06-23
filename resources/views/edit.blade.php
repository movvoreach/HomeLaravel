<div style="margin-bottom: 20px">
    <a href="{{ url('/') }}">Home</a> |
    <a href="{{ route('about.page') }}">About</a> |
    <a href="{{ route('contact.page') }}">Contact</a> |
    <a href="{{ route('customer') }}">Customer</a> |
     <a href="{{ route('customer.edit',$customer->id) }}">Edit Customer</a> |
    <a href="{{ route('letter.show', ['char' => 'A']) }}">Show</a>
</div>

<hr>

<h1>Update Customer</h1>
<form action="{{ route('customer.updated', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" value="{{ $customer->name }}"> <br><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" value="{{ $customer->email }}"> <br><br>

    <label for="phone">Phone</label><br>
    <input type="text" name="phone" id="phone" value="{{ $customer->phone }}"> <br><br>

    <label for="gender">Gender</label><br>
    <input type="text" name="gender" id="gender" value="{{ $customer->gender }}"> <br><br>

    <button type="submit">Save</button>
</form>
