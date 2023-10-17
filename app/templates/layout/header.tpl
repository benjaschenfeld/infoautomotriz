<!DOCTYPE html>
<html lang="en">

<!-- head -->

<head>
    <meta charset="UTF-8">
    <base href="{BASE_URL}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Automotriz INFO</title>
</head>

<body>
    <!-- main header -->
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <img width="230" height="80" class="navbar-brand" src="./assets/img/logo.png" alt="Logo de la Pagina">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active fs-4" aria-current="page" href="home">Home</a>
                        <a class="nav-link fs-4" href="registrarse">Registrarse</>
                        <a class="nav-link fs-4" href="contacto">Contacto</a>
                        {if isset($smarty.session.IS_LOGGED)}
                            <a class="nav-link fs-4" href="logout">Logout</a>
                        {else}
                            <a class="nav-link fs-4" href="login">Login</a>
                        {/if}
                    </div>
                 </div>
            </div>
        </nav>
    </header>
    