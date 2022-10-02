



<div class="sidebar d-flex flex-column flex-shrink-0">
    <a class="d-md-none" href="/">
        <img class="" src="{{asset('images/bdoctors_small_logo_white.png')}}" width="40" height="40" alt="">
    </a>
    <div class="d-none d-md-block">
        <a href="/" class="mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img class="w-75" src="{{asset('images/logo_full_white.png')}}" alt="">
        </a>
    </div>
    <hr class="text-white">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            @if (Auth::user()->image)
                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="" class="avatar-img rounded-circle me-2">   
            @else
                <div class="avatar-placeholder rounded-circle me-2">
                    <div class="initial-letters">{{ $firstLetterName = Str::substr(Auth::user()->name, 0, 1) }} {{$firstLetterSurname = Str::substr(Auth::user()->surname, 0, 1)  }}</div>
                </div>
            @endif
            <div class="d-none d-md-block">
                <div class="name fw-bold fs-5">
                    {{ Auth::user()->name }}
                </div>
                <div class="surname">
                    {{ Auth::user()->surname }}
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <hr class="text-white">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item {{ Request::route()->getName() === 'doctor.index' ? 'my-active' : '' }}">
            <a href="{{route("doctor.index")}}" class="text-white nav-link {{ Request::route()->getName() === 'doctor.index' ? 'my-active' : '' }}">
                <i class="fa-solid fa-house"></i>
            </a>
            <a href="{{route("doctor.index")}}" class="nav-link d-none d-md-block  {{ Request::route()->getName() === 'doctor.index' ? 'my-active' : '' }}" aria-current="page">
                Home
            </a>
        </li>
        <li class="nav-item {{ Request::route()->getName() === 'doctor.show' ? 'my-active' : '' }}">
            <a href="{{route("doctor.show")}}" class="text-white nav-link {{ Request::route()->getName() === 'doctor.show' ? 'my-active' : '' }}">
                <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{route("doctor.show")}}" class="nav-link d-none d-md-block {{ Request::route()->getName() === 'doctor.show' ? 'my-active' : '' }}" aria-current="page">
                Profilo
            </a>
        </li>
        <li class="nav-item {{ Request::route()->getName() === 'doctor.edit' ? 'my-active' : '' }}">
            <a href="{{route("doctor.edit")}}" class="text-white nav-link {{ Request::route()->getName() === 'doctor.edit' ? 'my-active' : '' }}">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <a href="{{route("doctor.edit")}}" class="nav-link d-none d-md-block {{ Request::route()->getName() === 'doctor.edit' ? 'my-active' : '' }}" aria-current="page">
                Modifica profilo
            </a>
        </li>
        <li class="nav-item {{ Request::route()->getName() === 'doctor.messages.index' ? 'my-active' : '' }}">
            <a href="{{route("doctor.messages.index")}}" class="text-white nav-link {{ Request::route()->getName() === 'doctor.messages.index' ? 'my-active' : '' }}">
                <i class="fa-solid fa-message"></i>
            </a>
            <a href="{{route("doctor.messages.index")}}" class="nav-link d-none d-md-block {{ Request::route()->getName() === 'doctor.messages.index' ? 'my-active' : '' }}" aria-current="page">
                Messaggi
            </a>
        </li>
        <li class="nav-item {{ Request::route()->getName() === 'doctor.reviews.index' ? 'my-active' : '' }}">
            <a class="text-white nav-link {{ Request::route()->getName() === 'doctor.reviews.index' ? 'my-active' : '' }}" href="{{route("doctor.reviews.index")}}">
                <i class="fa-solid fa-thumbs-up"></i>
            </a>
            <a href="{{route("doctor.reviews.index")}}" class="nav-link d-none d-md-block {{ Request::route()->getName() === 'doctor.reviews.index' ? 'my-active' : '' }}" aria-current="page">
                Recensioni
            </a>           
        </li>
        <li class="nav-item {{ Request::route()->getName() === 'doctor.stats.index' ? 'my-active' : '' }}">
            <a href="{{route("doctor.stats.index")}}" class="text-white nav-link {{ Request::route()->getName() === 'doctor.stats.index' ? 'my-active' : '' }}">
                <i class="fa-solid fa-chart-column"></i>
            </a>
            <a href="{{route("doctor.stats.index")}}" class="nav-link d-none d-md-block {{ Request::route()->getName() === 'doctor.stats.index' ? 'my-active' : '' }}" aria-current="page">
                Statistiche Account
            </a>
        </li>
        <li class="nav-item {{ Request::route()->getName() === 'doctor.sponsorships.index' ? 'my-active' : '' }}">
            <a href="{{route("doctor.sponsorships.index")}}" class="text-white nav-link {{ Request::route()->getName() === 'doctor.sponsorships.index' ? 'my-active' : '' }}">
                <i class="fa-solid fa-star"></i>
            </a>
            <a href="{{route("doctor.sponsorships.index")}}" class="nav-link d-none d-md-block {{ Request::route()->getName() === 'doctor.sponsorships.index' ? 'my-active' : '' }}" aria-current="page">
                Sponsorizzazioni
            </a>
        </li>
    </ul>
</div>    

