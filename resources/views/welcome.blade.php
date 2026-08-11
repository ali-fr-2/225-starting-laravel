<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>

    @foreach ($courses as $course )

    <h1>{{ $course->title }}</h1>

    @endforeach

</body>
</html>
