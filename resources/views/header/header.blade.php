<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        /* General Reset and Layout */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }

        /* Header Section */
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        /* Navigation Bar */
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }


        /* Main Content Area */
        .container {
            flex: 1; /* This makes it take remaining space */
            padding: 30px;
            text-align: center;
        }

        /* Footer Section */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
    </style>
</head>