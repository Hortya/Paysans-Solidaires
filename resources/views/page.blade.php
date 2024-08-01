<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paysans Solidaires</title>
    @vite('resources/css/header-nav.css')
</head>

<body>

    <a href="{{route('index')}}"><header class="flex">
        <img src="img/logo_vert.svg" alt="Logo Paysans Solidaires">
    </header></a>
    <x-main-nav />
    
        @section('content')
        The page content
        @show

    <footer class="flex column">
        <div class="flex column center gap30">
            <p>Rejoignez nous sur les réseaux sociaux</p>
            <div class="flex gap30">
                <a href="https://www.instagram.com/" target="_blank"><img src="img/Instagram.svg" alt="Logo Instagram"></a>
                <a href="https://www.facebook.com/" target="_blank"><img src="img/Facebook.svg" alt="Logo FB"></a>
            </div>
        </div>
        <ul>
            <li class="font">Besoin d'aide ?</li>
            <li><a href="">Nous contacter</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Paiement</a></li>
        </ul>
        <ul>
            <li><a href="">Données personnelles</a></li>
            <li><a href="">Conditions générales de vente</a></li>
            <li><a href="">Mentions légales</a></li>
            <li><a href="">Cookies</a></li>
        </ul>
        <div class="flex center"><img class="wid" src="img/logo_blanc.svg" alt="Logo Paysans Solidaires"></div>
    </footer>


</body>

</html>