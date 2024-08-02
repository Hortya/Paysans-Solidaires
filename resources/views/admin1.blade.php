@extends('page')
@vite("resources/css/reset.css")
@vite("resources/css/style.css")
@vite('resources/css/app.css')
@section('content')
<main class="flex column">
    <h1>Gestion des utilisateurs</h1>
    <form class="flex" action="#">
        <input type="search" placeholder="Search...">
    </form>

    <div class="flex">
        <a href="" class="filtre">Filtres<img class="arrow" src="img/pictos/arrow-bas.svg" alt="Flèche vers le bas"></a>
    </div>

    <div class="grid">
        <p class="gras">NOM</p>
        <p class="gras">Prénom</p>
        <p class="gras">Rôles</p>
    </div>
    <section class="flex column gap-user">
        <ul>
            @foreach(DB::table('users')->join('role_user', 'users.id', '=', 'user_id')->join('roles', 'user_id', '=', 'roles.id')->select('users.firstname', 'users.lastname', 'roles.name', 'users.id')->orderBy('lastname', 'asc')->get() as $user)
            <li>
                <a href="{{route('admin-id', $user->id)}}" class="flex">
                    <p>{{$user->lastname}}</p>
                    <p>{{$user->firstname}}</p>
                    <p class="marg0">{{$user->name}}</p>
                </a>
            </li>
            @endforeach
            <li>
                <a href="" class="grid border-bot2">
                    <p class="size-small upp">Vaillancour</p>
                    <p class="size-small">Olivier</p>
                    <p class="size-small">Admin</p>
                </a>
            </li>
            <li>
                <a href="" class="grid border-bot2">
                    <p class="size-small upp">Chaussée</p>
                    <p class="size-small">Valentine</p>
                    <p class="size-small">Producteur</p>
                </a>
            </li>
            <li>
                <a href="" class="grid border-bot2">
                    <p class="size-small upp">Blanc</p>
                    <p class="size-small">Yvette</p>
                    <p class="size-small">Adhérent</p>
                </a>
            </li>
        </ul>
    </section>
    <div class="flex gap30">
        <a href="">1</a>
        <a href=""><img src="img/pictos/Vector.svg" alt="Flèche de droite pour changer de page"></a>
    </div>
    <div class="flex center">
        <a href=""><img class="picto" src="img/pictos/Vector2.svg">Revenir à la page précédente</a>
    </div>
    @endsection