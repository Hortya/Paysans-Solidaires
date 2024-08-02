@extends('page')
@vite("resources/css/reset.css")
@vite("resources/css/style.css")
@vite('resources/css/app.css')
@section('content')
@foreach($user as $u)
<main class="flex column">

    <h1>Gestion des utilisateurs</h1>
    <form class="flex" action="#">
        <input type="search" placeholder="Search...">
    </form>

    <div class="flex">
        <a href="" class="filtre">Filtres<img class="arrow" src="img/pictos/arrow-bas.svg" alt="Flèche vers le bas"></a>
    </div>

    <section class="flex column">
        <form action="{{route('admin-edit')}}" method='post'>
            @csrf
            <input type="hidden" name="id" value="{{$u->id}}">
            <div class="input-txt form-name">
                <x-input-label class="txt dm-mono-regular firstname" for="firstname" :value="__('Prénom :')" />
                <x-text-input id="firstname" class="input-itm-name input-firstname" type="text" name="firstname" value="{{$u->firstname}}" required autofocus autocomplete="firstname" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

                <x-input-label class="txt dm-mono-regular lastname" for="lastname" :value="__('Nom :')" />
                <x-text-input id="lastname" class="input-itm-name input-lastname" type="text" name="lastname" value="{{$u->lastname}}" required autofocus autocomplete="lastname" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="form-mail">
                <x-input-label class="txt dm-mono-regular" for="email" :value="__('Mail')" /><br>
                <x-text-input id="email" class="input-itm" type="email" name="email" value="{{$u->email}}" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <label for="contribution">Cotisation payée :</label>
            <input type="checkbox" name="contribution" id="">
            <p>Rôle : {{$u->name}}</p>
            <button type="submit">Valider</button>
        </section>
        
        <a class="align-center gras" href="{{route('role-id', $u->id)}}">Modifier le rôle</a>
        
        <div class="flex center">
            <a href=""><img class="picto" src="img/pictos/Vector2.svg">Revenir à la page précédente</a>
        </div>
    </main>
    @endforeach
@endsection