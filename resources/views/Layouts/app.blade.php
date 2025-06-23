<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div style="margin-bottom: 20px">
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ route('about.page') }}">About</a> |
        <a href="{{ route('contact.page') }}">Contact</a> |
        <a href="{{ route('customer') }}">Customer</a> |
        <a href="{{ route('letter.show', ['char' => 'A']) }}">Show</a>
        <a href="{{ route('index') }}">Add product</a>
    </div>
    @yield('content');

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
