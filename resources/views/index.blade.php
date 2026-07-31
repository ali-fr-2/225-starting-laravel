{{-- @extends('layout.master') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<h1>index</h1>
<a href="{{ route('about') }}">about</a>
<a href="{{ route('course',['course'=>'php','id'=>'100']) }}">coure</a>
</body>
</html>
