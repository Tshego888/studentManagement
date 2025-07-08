<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    @yield('head')

    <!-- Default Styles (if any) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        nav {
            background-color: #005bb5;
            color: white;
            padding: 15px;
        }

        footer {
            background-color: #333;
            color: #ccc;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>

    @yield('styles')
</head>
<body>

    <nav>
        <h1>Student Management System</h1>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    

    @yield('scripts')

</body>
</html>
