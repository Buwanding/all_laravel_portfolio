<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - Aladdin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .hero {
            padding: 100px 0;
            text-align: center;
        }
        .hero img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 12px solid #3b82f6;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero h1 span {
            color: #3b82f6;
        }
        .btn-contact {
            background-color: #3b82f6;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4">
        <a class="navbar-brand font-weight-bold text-primary" href="#">📁 Portfolio</a>
        <div class="ml-auto">
            <a class="nav-link d-inline-block" href="#">Home</a>
            <a class="nav-link d-inline-block" href="#">About</a>
            <a class="nav-link d-inline-block" href="#">Skills</a>
            <a class="nav-link d-inline-block" href="#">Portfolio</a>
            <a class="nav-link d-inline-block" href="#">Contact</a>
            <span class="ml-2">🌞</span>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>
