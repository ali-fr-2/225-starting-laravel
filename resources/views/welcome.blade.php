<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>

<body>

    {{-- @foreach ($tags as $tag)
        <h1>{{ $tag->name }}</h1>
    @endforeach --}}


    @foreach ($producuts as $producut)
        <h1>{{ $producut->name }}</h1>
    @endforeach

</body>

</html>
