<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journals</title>
</head>
<body>
    <h1>Journals</h1>
    <ul>
        @foreach ($jurnals as $jurnal)
            <li>{{ $jurnal->title }} by {{ $jurnal->author }} ({{ $jurnal->year }})</li>
        @endforeach
    </ul>
    <a href="/">Back to Home</a>
</body>
</html>
