<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDs</title>
</head>
<body>
    <h1>CDs</h1>
    <ul>
        @foreach ($cds as $cd)
            <li>{{ $cd->title }} by {{ $cd->artist }} ({{ $cd->release_year }})</li>
        @endforeach
    </ul>
    <a href="/">Back to Home</a>
</body>
</html>
