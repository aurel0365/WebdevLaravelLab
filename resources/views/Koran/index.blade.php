<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspapers</title>
</head>
<body>
    <h1>Newspapers</h1>
    <ul>
        @foreach ($korans as $koran)
            <li>{{ $koran->title }} ({{ $koran->date }})</li>
        @endforeach
    </ul>
    <a href="/">Back to Home</a>
</body>
</html>
