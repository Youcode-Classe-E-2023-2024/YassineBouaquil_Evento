<div class="navigation">
    <ul style="padding-top: 10px;">




        <li>
            <a href="#">
                <span class="icon" style="background-color: white; display: flex; justify-content: center; align-items: center; border-radius: 100%;">
                    <img src="{{ asset('imgs/logo.svg') }}" alt="" width="50">
                </span>
                <span class="title">EVENTO</span>
            </a>
        </li>
        <div class="p-4 mx-1">
            @auth
                <p class="text-white text-bold">Bienvenue, {{ Auth::user()->name }}</p>
            @endauth
        </div>


        <li class="{{ $black_hover == 'home' ? 'black_hover': '' }}">
            <a href="{{ route('main') }}">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Home</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'Reserve a ticket' ? 'black_hover': '' }}">
            <a href="{{ route('reserve') }}">
                <span class="icon">
                    <ion-icon name="ticket-outline"></ion-icon>
                </span>
                <span class="title">Reserve a ticket</span>
            </a>
        </li>

        @if(Auth::user()->role == 'Organisateur' || Auth::user()->role == 'Administrateur')
            <!-- Ces éléments ne seront affichés que pour les Organisateurs et les Administrateurs -->
            <li class="{{ $black_hover == 'Be an organizer' ? 'black_hover': '' }}">
                <a href="{{ route('subscribe') }}">
                    <span class="icon">
                        <ion-icon name="cube-outline"></ion-icon>
                    </span>
                    <span class="title">Be an organizer</span>
                </a>
            </li>

            <li class="{{ $black_hover == 'Manage events' ? 'black_hover': '' }}">
                <a href="{{ route('manageEvent') }}" class="">
                    <span class="icon">
                        <ion-icon name="construct-outline"></ion-icon>
                    </span>
                    <span class="title">Manage events</span>
                </a>
            </li>

            <!-- Ajoutez d'autres fonctionnalités spécifiques aux Organisateurs et Administrateurs ici -->

        @endif

        @if(Auth::user()->role == 'Administrateur')
            <!-- Ces éléments ne seront affichés que pour les Administrateurs -->
            <li class="{{ $black_hover == 'Manage categories' ? 'black_hover': '' }}">
                <a href="{{ route('manageCategories') }}">
                    <span class="icon">
                        <ion-icon name="grid-outline"></ion-icon>
                    </span>
                    <span class="title">Manage categories</span>
                </a>
            </li>

            <li class="{{ $black_hover == 'Manage users' ? 'black_hover': '' }}">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Manage users</span>
                </a>
            </li>

            <!-- Ajoutez d'autres fonctionnalités spécifiques aux Administrateurs ici -->

        @endif

        <li class="{{ $black_hover == 'Profile' ? 'black_hover': '' }}">
            <a href="#">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="title">Profile</span>
            </a>
        </li>

        <li class="{{ $black_hover == 'Sign Out' ? 'black_hover': '' }}">
            <a href="#">
                <form action="{{ 'logout' }}" method="POST" class="icon">
                    @csrf
                    <button type="submit">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </button>
                </form>
                <span class="title">Sign Out</span>
            </a>
        </li>

        <li>
            <ion-icon class="toggle text-white" name="chevron-back-outline"></ion-icon>
        </li>
    </ul>
</div>
