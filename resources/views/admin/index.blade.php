<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Riedlentes - ADMIN</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper" style="min-width: 90%   ">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto my-2 my-lg-0">
                            <li class="nav-item"><a class="nav-link text-primary" href="">Sveiki, {{ Auth::user()->name }}</a></li>
                            <li class="nav-item"><a class="nav-link text-danger" href="{{ route('logout') }}">Atsijungti</a></li>
                            <li class="nav-item"><a class="nav-link text-warning" href="{{ route('index') }}">Grįžti į puslapį</a></li>
                            {{--                <li class="nav-item"><a class="nav-link" href="/admin.html">Admin</a></li>--}}
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container">
                <h1 class="mt-4">Pridėti prekę</h1>
                <form action="" method="">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Pavadinimas">Pavadinimas</label>
                            <input type="text" class="form-control" id="Pavadinimas" placeholder="Pavadinimas">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Kaina">Kaina</label>
                            <input type="number" class="form-control" id="Kaina" placeholder="Kaina">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Nuotrauka">Nuotrauka</label>
                        <input type="text" class="form-control" id="Nuotrauka" placeholder="Nuotrauka">
                    </div>
                    <div class="form-group">
                        <label for="Aprasymas">Aprasymas</label>
                        <input type="text" class="form-control" id="Aprasymas" placeholder="Aprasymas">
                    </div>
                    <button type="submit" class="btn btn-primary">Pridėti prekę</button>
                </form>
                <h1 class="mt-4">Prekių sąrašas</h1>
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Preke</th>
                        <th scope="col">Kategorija</th>
                        <th scope="col">Sukurta vartotojo</th>
                        <th scope="col">Panaikinti</th>
                        <th scope="col">Redaguoti</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Preke</td>
                        <td>Kategorija</td>
                        <td>@Sukurta vartotojo</td>
                        <td>Panaikinti</td>
                        <td>Redaguoti</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
