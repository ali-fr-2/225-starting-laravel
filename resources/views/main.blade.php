<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>

<body>
    {{-- @if ($records > 5)
        {{ $records }}>5
    @endif --}}


    {{-- @if ($records > 5)
        <h1>i have {{ $records }}records</h1>
        @elseif ($records===5)
        <h1>i dont have much records</h1>
        @else
        <h1>hhhhhh</h1>
    @endif --}}

    @unless ($records>20)
        <h1>this is unless</h1>
    @endunless


</body>

</html>
