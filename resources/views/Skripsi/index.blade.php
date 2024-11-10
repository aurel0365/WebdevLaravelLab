<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skripsi</title>
</head>
<body>
    <h1>Skripsi</h1>
    <ul>
        @foreach ($skripsis as $skripsi)
            <li>{{ $skripsi->title }} by {{ $skripsi->author }} ({{ $skripsi->year }})</li>
        @endforeach
    </ul>
    <a href="/">Back to Home</a>
</body>
</html>
