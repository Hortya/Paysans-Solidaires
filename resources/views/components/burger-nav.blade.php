<nav class="container-nav container-nav-itm">

    <a class="notification notification-img" href="#"></a>

    <div class="menu-container">
        <input class="burger-shower" type="checkbox" id="burger-shower">
        <label for="burger-shower" class="hamburger"></label>
        <ul class="burger-menu">
        <li class="burger-txt"><a class="dashboard-txt" href="">Nos produits</a></li>
        <li class="burger-txt"><a class="dashboard-txt"href="">Nos producteurs</a></li>
        <li class="burger-txt"><a class="dashboard-txt" href="">Contact</a></li>
        @if(!Auth::user())
        <li class="burger-txt"><a class="dashboard-txt" href="{{route('login')}}">Se connecter</a></li>
        <li class="burger-txt"><a class="dashboard-txt" href="{{route('register')}}">Créer un compte</a></li>
        @elseif(!Auth::user()->hasRole('admin'))
        <li class="burger-txt"><a class="dashboard-txt" href="{{route('dashboard')}}">Mon compte</a></li>
        <li class="burger-txt"><a class="dashboard-txt" href="">Panier</a></li>
        <li class="burger-txt"><form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" class="dashboard-txt" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Se déconnecter') }}
            </x-responsive-nav-link>
        </form></li>
        @elseif(Auth::user()->hasRole('admin'))
        <li><a class="dashboard-txt" href="{{route('dashboard')}}">Mon compte</a></li>
        <li><a class="dashboard-txt" href="{{route('admin')}}">Gestion des utilisateurs</a></li>
        <li><a class="dashboard-txt" href="">Panier</a></li>
        <li><form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" class="dashboard-txt" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Se déconnecter') }}
            </x-responsive-nav-link>
        </form></li>
        @endif
    </ul>
    </div>
</nav>