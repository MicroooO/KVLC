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
                    <li class="nav-item"><a class="nav-link text-danger" href="{{ route('logout') }}">Atsijungti</a></li>
                    @if (Auth::user()->Role == 'Administratorius')
                        <li class="nav-item"><a class="nav-link text-warning" href="{{ route('admin') }}">Administravimas</a></li>
                    @endif
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Geriausios riedlentės JUMS!</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5"> NUSIPIRKĘ MŪSŲ PARDUOTUVĖJE RIEDLENTĘ IR TOBULĖJANT SUDĖVĖJĘ KAŽKURIAS DALIS, JAS GALĖSITE ATSINAUJINTI Į KITAS PROFESIONALIAS RIEDLENČIŲ DALIS, KURIOS ATITIKS VISUS JŪSŲ TURIMOS RIEDLENTĖS IŠMATAVIMUS.</p>
                <a class="btn btn-primary btn-xl" href="#about">Peržiurėti</a>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Mes turime viską jūsų reikmėms!</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Riedlentės įvairiausių kategorijų - sportui, laisvalaikiui, ekstremaliems pojūčiams!</p>
                <a class="btn btn-light btn-xl" href="#services">Riedlentės</a>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Mes JUMS siūlome</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Aukštą kokybę</h3>
                    <p class="text-muted mb-0">Siūlome JUMS riedlentes tik geriausios kokybės!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Greitą susiekimą</h3>
                    <p class="text-muted mb-0">Mes į JŪSŲ klausimus atrašome per 1 d.d</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Didelį kiekį riedlenčių pasirinkimą</h3>
                    <p class="text-muted mb-0">Riedlentės visoms paskirtiems!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Padaryta su meile</h3>
                    <p class="text-muted mb-0">Visus užsakymus atliekam su meile!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/riedlente (1).jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">SPORTUI</div>
                        <div class="project-name">Riedlentės skirtos sportui, greitam važiavimui.</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/riedlente (2).jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">LAISVALAIKIUI</div>
                        <div class="project-name">Riedlentės skirtos laisvalaikiui, ilgam ir lengvam važiavimui.</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
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
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Turite klausimų? Susisiekite!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Atrašysime JUMS kuo greičiau!</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..."/>
                        <label for="name">Pilnas vardas</label>
                        <div class="invalid-feedback">Vardas yra reikalingas</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com"/>
                        <label for="email">El-paštas</label>
                        <div class="invalid-feedback">El-paštas yra reikalingas</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="+37000000000"/>
                        <label for="phone">Telefono numeris</label>
                        <div class="invalid-feedback">Telefono numeris yra reikalingas</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="message">Žinutė</label>
                        <div class="invalid-feedback">Žinutė yra reikalinga</div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Klaida!</div></div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Parašytį</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+37060000005</div>
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
