<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin: 15px 0;
        }

        a {
            display: block;
            text-decoration: none;
            font-size: 18px;
            padding: 15px;
            width: 250px;
            margin: 0 auto;
            background-color: #007bff; /* Biru */
            color: white;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
        }

        /* Add responsive design */
        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            a {
                width: 200px;
            }
        }
    </style>
</head>
<body>
    <div>
        <h1>Welcome to Aurel Library</h1>
        <ul>
            <li><a href="{{ url('/books') }}">Books</a></li>
            <li><a href="{{ url('/jurnals') }}">Journals</a></li>
            <li><a href="{{ url('/cds') }}">CDs</a></li>
            <li><a href="{{ url('/korans') }}">Newspapers</a></li>
            <li><a href="{{ url('/skripsis') }}">Theses</a></li>
        </ul>
    </div>
</body>
</html>
