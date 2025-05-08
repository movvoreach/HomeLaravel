<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }

        .letters a {
            margin: 5px;
            text-decoration: none;
        }

        img {
            max-width: 150px;
        }
    </style>
</head>

<body>
    <div style="margin-bottom: 20px">
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ route('about.page') }}">About</a> |
        <a href="{{ route('contact.page') }}">Contact</a> |
        <a href="{{ route('customer') }}">Customer</a> |
        <a href="{{ route('letter.show', ['char' => 'A']) }}">Show</a>
    </div>

    <div style="width: 1400px; box-shadow: 8px 5px 8px 5px rgba(0, 0, 0, 0.2); padding: 15px; ">
        <div class="letters">
            @foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'] as $letter)
                / <a href="{{ route('letter.show', ['char' => $letter]) }}"
                    style=" display: inline-block; background-color: #1c1cb2;color: white; font-size: 18px;border-radius: 50%; width: 25px;height: 25px;line-height: 25px;text-align: center; text-decoration: none;">
                    {{ $letter }}</a>
            @endforeach

        </div>
        <hr>
        <h1>{{ $char }} for {{ $dictionary['word'] }}</h1>
        <hr>

        <div style="display: flex; align-items: center; gap: 20px; margin-top: 20px;">
            <img src="{{ asset('images/' . $dictionary['image']) }}" alt="{{ $dictionary['word'] }}" width="300">
            <div style="width:200px">
                <p>{{ $dictionary['Description'] }}</p>
            </div>
        </div>

    </div>

</body>

</html>


