<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('storage/css/app.css') }}">
    <title>God Of War</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body class="bg-black container-fluid h-100 text-center text-color-white" style="min-height: 100vh;">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <!-- <img id="logo-god-preto" src="{{ url('storage/images/logoPreto.png') }}" alt="" /> -->
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Introdução</a></li>
                <li class="nav-item"><a href="/guia" class="nav-link">Guia da Franquia</a></li>
            </ul>
        </header>
    </div>

    <div class="hero-iscoming">
    </div>

    <main>
        <iframe class="iframe-yt-player-iscoming" style="margin-bottom: 2rem;" height="600" src="https://www.youtube.com/embed/0N4J-7gsaGc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <h1 class="h1 p-3">O Fimbulwinter antecede os eventos do Ragnarok!</h1>

        <h2 class="h3">Kratos e Atreus retornaram sua jornada nos reinos nórdicos</h2>
    </main>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-black">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="./" class="nav-link px-2 text-muted color-link-red">Home</a></li>
                <li class="nav-item"><a href="github.com/MrNullus" class="nav-link px-2 text-muted">Mr. Nullus</a></li>
                <li class="nav-item"><a href="github.com/" class="nav-link px-2 text-muted">Teu GitHub</a></li>
            </ul>
        </footer>
    </div>

    
</body>

</html>