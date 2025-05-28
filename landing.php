<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #ffffff;
            height: 100vh;
        }
        .hero-img {
            max-width: 100%;
            height: auto;
        }
        .btn-primary {
            background-color: #4e73df;
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-white shadow-sm px-4">
        <a class="navbar-brand fw-bold" href="#">YOUR LOGO</a>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link text-dark" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">Work</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">Info</a></li>
            <li class="nav-item"><a class="nav-link text-primary fw-semibold" href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="display-4 fw-bold">Growing up landing page</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <a href="login.php" class="btn btn-primary btn-lg mt-3">Login</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="img.jpg" alt="Ilustrasi" class="hero-img">
            </div>
        </div>
    </div>
</body>
</html>
