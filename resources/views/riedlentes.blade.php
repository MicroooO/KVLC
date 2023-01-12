<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Riedlentės!</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">Riedlentės!</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="#about">Apie mus</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Paslaugos</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Riedlenčių kategorijos</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontaktai</a></li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item"><a class="nav-link" href="{{ Route('login') }}"><i class="bi bi-person-circle text-primary"></i> Prisijungti/Registruotis</a></li>
                    @endif
                @else
                    <li class="nav-item"><a class="nav-link text-primary" href="">Sveiki, {{ Auth::user()->name }}</a></li>
{{--                    <li class="nav-item"><a class="nav-link text-danger" href="{{ route('logout') }}">Atsijungti</a></li>--}}
                    @if (Auth::user()->Role == 'Administratorius')
                        <li class="nav-item"><a class="nav-link text-warning" href="{{ route('admin') }}">Administravimas</a></li>
                    @endif
                @endguest
                {{--                <li class="nav-item"><a class="nav-link" href="/admin.html">Admin</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
<section class="page-section" id="services">
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/riedlente (1).jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">SPORTUI</div>
                        <div class="project-name">Riedlentės skirtos sportui, greitam važiavimui.</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/riedlente (2).jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">LAISVALAIKIUI</div>
                        <div class="project-name">Riedlentės skirtos laisvalaikiui, ilgam ir lengvam važiavimui.</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/riedlente (3).jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Ekstremaliems pojūčiams</div>
                        <div class="project-name">Riedlentės skirtos ekstremliems veiksmams, aukščiausia kokybė, itin aukštos ištvermės riedlentės.</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Riedlentės!</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
