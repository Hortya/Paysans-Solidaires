<nav>
    <ul>
        @if(!Auth::user())
        <li><a href="">Nos produits</a></li>
        <li><a href="">Nos producteurs</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="{{route('login')}}">Se connecter</a></li>
        <li><a href="{{route('register')}}">Créer un compte</a></li>
        <li><a href="">Panier</a></li>
        @elseif(!Auth::user()->hasRole('admin'))
        <li><a href="">Nos produits</a></li>
        <li><a href="">Nos producteurs</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="{{route('dashboard')}}">Mon compte</a></li>
        <li><a href="">Panier</a></li>
        <li><form class="position form-dashboard-lnk" method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" class="form-dashboard-lnk" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Se déconnecter') }}
            </x-responsive-nav-link>
        </form></li>
        @elseif(Auth::user()->hasRole('admin'))
        <li><a href="">Nos produits</a></li>
        <li><a href="">Nos producteurs</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="{{route('dashboard')}}">Mon compte</a></li>
        <li><a href="{{route('admin')}}">Gestion des utilisateurs</a></li>
        <li><a href="">Panier</a></li>
        <li><form class="" method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" class="" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Se déconnecter') }}
            </x-responsive-nav-link>
        </form></li>
        @endif
    </ul>
</nav>