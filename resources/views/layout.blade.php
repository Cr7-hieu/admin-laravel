<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/174372c11f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="/css/layout.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>
    <header>
        <nav class="header">
            <div class="logo-box">
                <img src="/var/www/html/logo.png" class="logo" alt="The code">
            </div>
            <div class="parent-link">
                <a href="#" class="social-link">About</a>
                <a href="#" class="social-link">Projects</a>
                <a href="#" class="social-link">Experience</a>
                <a href="" class="social-link">Contact</a>
            </div>
            <div class="icon">
                <a href="#" class="sm-icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="sm-icon"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="sm-icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="sm-icon"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="sm-icon"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </nav>
        <div class="header-container">
            <div class="hdr-inner">
                <h1>Model</h1>
                <p>
                    <b>The GenZ</b> World of cards and models
                </p>
                <a href="#" class="btn">Get Started</a>
            </div>
        </div>
    </header>
    <div class="background"></div>
    <div class="container">
        @yield('body')
    </div>
    <footer>

    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>