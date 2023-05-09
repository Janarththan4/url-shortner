<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link CSS--}}
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
    <title>URL Shortner</title>
</head>

<body>
    <div>
        <h1>URL Shortner</h1>
        <form action="{{url('/')}}" method="POST">
            <input type="text" name="link" placeholder="Insert your URL and Press Enter">
            @csrf
        </form>
        @if (Session::has('errors'))
        <h3 class="error">* {{ $errors->first('link') }}</h3>
        @endif

        @if (Session::has('message'))
        <h3 class="error">* {{ Session::get('message') }}</h3>
        @endif

        @if (Session::has('link'))
        <h1><a href="{{ url(Session::get('link')) }}" target="_blank">{{ url(Session::get('link')) }}</a></h1>
        @endif
    </div>
</body>

</html>