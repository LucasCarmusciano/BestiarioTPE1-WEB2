<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Bestiario - The Witcher</title>
</head>
<body>
    <header style="margin-top: 55px;">
            <nav class="navbar bg-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Bestiario - The Witcher</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Bestiario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="">Monstruos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories">Categorias</a>
                        </li>
                        {if !isset($smarty.session.id)}
                            <li class="nav-item">
                                <a class="nav-link" href="login">Iniciar Sesión</a>
                            </li>
                        {else}
                            <li class="nav-item">
                                <a class="nav-link" href="admin">Administrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Cerrar Sesión</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Agregar
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="addMonster">Monstruo</a></li>
                                <li><a class="dropdown-item" href="addCategorie">Categoria</a></li>
                            </li>
                        {/if}
                        
                        </ul>
                    </div>
                    </div>
                </div>
            </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">
