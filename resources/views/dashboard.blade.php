@extends('page')
@vite("resources/css/reset.css")
@vite("resources/css/style.css")
@vite('resources/css/app.css')
@section('title')
@section('content')

<main class="body">

    <h2 class="ttl anton-regular">
        {{ __('Mon compte') }}
    </h2>

    <div class="dashboard-position">

        <div >
            <ul class="dashboard-itm cotisation">
                <li>Cotisation :</li>
                <li>Adhérent depuis le :</li>
                <li>Renouveler sa cotisation avant le :</li>
            </ul>
        </div>

        <div class=" links">
            <ul class="dashboard-lst">
                <li><a class="dashboard-txt" href="#">Gestion des <br> utilisateurs</a></li>
                <li><a class="dashboard-txt" href="#">Informations</a></li>
                <li><a class="dashboard-txt" href="#">Paiements</a></li>
                <li><a class="dashboard-txt" href="#">Commandes</a></li>
                <li><a class="dashboard-txt" href="#">Planning</a></li>
                <li><a class="dashboard-txt" href="#">Calendrier</a></li>
                <li><a class="dashboard-txt" href="#">Panier</a></li>
            </ul>
        </div>
    </div>

    <form class="position form-dashboard-lnk" method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')" class="form-dashboard-lnk" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Se déconnecter') }}
        </x-responsive-nav-link>
    </form>

</main>

@endsection