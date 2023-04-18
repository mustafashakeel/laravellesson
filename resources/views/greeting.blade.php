<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@section('content')
    <p>This is my body content.</p>
@endsection
@if (count($people))
    There are some people!
    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach
@else
    There are no people!
@endif


<select name="version">
    @foreach ($people as $person)
        <option value="{{ $person }}">
            {{ $person }}
        </option>
    @endforeach
</select>

</body>

</html>
