<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>

<body>

    {{-- @switch($i)
        @case(1)
            first case
        @break

        @case(2)
            second case
        @break

        @default
            default case...
    @endswitch --}}

    {{-- @for ($i = 0; $i < 10; $i++)
        current value is : {{ $i }} <br>
    @endfor --}}


    {{-- @foreach ($users as $user)
        <p>this is user : {{ $user }}</p>
    @endforeach --}}

    @forelse ($users as $user)
        <li>{{ $user }}</li>
    @empty
        <h1>there is no users</h1>
    @endforelse



</body>

</html>
