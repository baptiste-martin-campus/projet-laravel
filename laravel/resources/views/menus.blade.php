<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="description" content="ici nous vendons de la biére de qualité alors préparez votre palais car vous risquez d'être surpris  de la meilleur des façons " />
    <title>La Brasserie Noé</title>
</head>

<body>
    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand">
                <img src="/photos/photo-logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="logo" />Noé Brasserie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}">Accueil</a></li>
                    <!-- Dropdown-menu-bière -->
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown-menu-btn1" data-bs-toggle="dropdown" aria-expanded="false">Nos bières</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{asset('product')}}">Catalogue</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="{{asset('product/5')}}">La Biquette</a></li>
                                <li><a class="dropdown-item" href="{{asset('product/7')}}">La Lion</a></li>
                                <li><a class="dropdown-item" href="{{asset('product/8')}}">La Rakoon</a></li>
                                <li><a class="dropdown-item" href="{{asset('product/6')}}">La Grizzly</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Dropdown-menu-équipe -->
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown-menu-btn2" data-bs-toggle="dropdown" aria-expanded="false">
                                Équipe
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{asset('membres')}}">Membres</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="{{asset('membres/hubert')}}">Hubert</a></li>
                                <li><a class="dropdown-item" href="{{asset('membres/aurelien')}}">Aurélien</a></li>
                                <li><a class="dropdown-item" href="{{asset('membres/lucie')}}">Lucie</a></li>
                                <li><a class="dropdown-item" href="{{asset('membres/hercule')}}">Hercule</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{asset('contact')}}">Contact</a></li>
                </ul>
                <!-- Boutton-panier -->
                <form class="form-inline my-3 my-lg-0" id="panier">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-panier">
                        Panier
                    </button>
                </form>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>

    </footer>

    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"
    ></script>
</body>

</html>
