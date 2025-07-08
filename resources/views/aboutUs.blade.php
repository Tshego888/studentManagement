@extends('app.layouts')
@section('styles')
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .main {
            flex: 1;
            display: flex;
        }
        .sidebar {
            width: 200px;
            background-color: #f8f9fa;
            padding: 15px;
        }
        .content {
            flex: 1;
            padding: 15px;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
@endsection    


@section('content')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">MyApp</a>
    </nav>

    <!-- Main Layout -->
    <div class="main">
        <!-- Sidebar -->
        <div class="sidebar">
            <h5>Navigation</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="#">🏠 Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">📄 About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">📬 Contact</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            
        </div>
    </div>
    @endsection

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} MyApp. All rights reserved.
    </footer>

</body>
</html>
