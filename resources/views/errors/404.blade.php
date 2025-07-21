<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 | Page Not Found</title>
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: #f8fafc;
            color: #444;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 80px 20px;
        }

        .icon {
            font-size: 100px;
            color: #3490dc;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 80px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
        }

        a {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        a i {
            margin-right: 8px;
        }

        a:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>

    <div class="icon">
        <i class="fas fa-exclamation-triangle"></i>
    </div>

    <h1>404</h1>
    <h2>Page Not Found</h2>
    <p>
        The page you're looking for might have been moved or doesn't exist anymore.
    </p>

    <a href="{{ url('/') }}">
        <i class="fas fa-home"></i> Return to Homepage
    </a>

</body>
</html>
