@extends('page')
@vite("resources/css/reset.css")
@vite("resources/css/style.css")
@vite('resources/css/app.css')
@section('content')
<main class="flex column">

    <h1>Modifier le rôle</h1>
    <form class="flex" action="#">
        <input type="search" placeholder="Search...">
    </form>

    <div class="flex">
        <a href="" class="filtre">Filtres<img class="arrow" src="img/pictos/arrow-bas.svg" alt="Flèche vers le bas"></a>
    </div>

    <section class="flex start">
        <p class="gras">Nom : Dupont</p>
        <p>Prénom : Alexandre</p>
    </section>

    <section class="flex column gap30">
        <div class="flex reverse-bet border-bot">
            <input type="checkbox">
            <nom>Administrateur</nom>
            </input>
        </div>
        <div class="flex reverse-bet border-bot">
            <input type="checkbox">
            <nom>Responsable producteur</nom>
            </input>
        </div>
        <div class="flex reverse-bet border-bot">
            <input type="checkbox">
            <nom>Producteur</nom>
            </input>
        </div>
        <div class="flex reverse-bet border-bot">
            <input type="checkbox">
            <nom>Adhérent</nom>
            </input>
        </div>

        <div class="flex">
            <button class="cta" type="submit">Valider</button>
        </div>
    </section>

    <div class="flex center margtop">
        <a href=""><img class="picto" src="img/pictos/Vector2.svg">Revenir à la page précédente</a>
    </div>
</main>
@endsection