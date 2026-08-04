{{-- @extends('layout.master') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>


<ul>

    @foreach ($articles as $article)
        <li>{{ $article->title }}</li>
        <li>{{ $article->id }}</li>
    @endforeach

</ul>


</body>
</html>
