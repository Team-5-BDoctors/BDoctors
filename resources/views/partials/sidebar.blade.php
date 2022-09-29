<div class="sidebar d-flex flex-column flex-shrink-0">
    <a href="/" class="mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img class="w-75" src="{{asset('images/logo_full_white.png')}}" alt="">
    </a>
    <hr class="text-white">
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            @if (Auth::user()->image)
            <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="" class="rounded-circle me-2">   
            @else
            <div class="avatar-placeholder rounded-circle me-2">
                <div class="initial-letters">{{ $firstLetterName = Str::substr(Auth::user()->name, 0, 1) }} {{$firstLetterSurname = Str::substr(Auth::user()->surname, 0, 1)  }}</div>
            </div>
            
            @endif
            <div>
                <div class="name fw-bold fs-5">
                    {{ Auth::user()->name }}
                </div>
                <div class="surname">
                    {{ Auth::user()->surname }}
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
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
        <li class="nav-item">
            <a href="{{route("doctor.index")}}" class="nav-link text-white {{ Request::route()->getName() === 'doctor.index' ? 'my-active' : '' }}" aria-current="page">
                <i class="fa-solid fa-house"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route("doctor.show")}}" class="nav-link text-white {{ Request::route()->getName() === 'doctor.show' ? 'my-active' : '' }}" aria-current="page">
                <i class="fa-solid fa-eye"></i>
                Profilo
            </a>
        </li>
        <li>
            <a href="{{route("doctor.edit")}}" class="nav-link text-white {{ Request::route()->getName() === 'doctor.edit' ? 'my-active' : '' }}" aria-current="page">
                <i class="fa-solid fa-pen-to-square"></i>
                Modifica profilo
            </a>
        </li>
        <li>
            <a href="{{route("doctor.messages.index")}}" class="nav-link text-white {{ Request::route()->getName() === 'doctor.messages.index' ? 'my-active' : '' }}" aria-current="page">
                <i class="fa-solid fa-message"></i>
                Messaggi
            </a>
        </li>
        <li>
            <a href="{{route("doctor.reviews.index")}}" class="nav-link text-white {{ Request::route()->getName() === 'doctor.reviews.index' ? 'my-active' : '' }}" aria-current="page">
                <i class="fa-solid fa-thumbs-up"></i>
                Recensioni
            </a>
        </li>
        <li>
            <a href="{{route("doctor.stats.index")}}" class="nav-link text-white {{ Request::route()->getName() === 'doctor.stats.index' ? 'my-active' : '' }}" aria-current="page">
                <i class="fa-solid fa-chart-column"></i>
                Statistiche Account
            </a>
        </li>
        <li>
            <a href="{{route("doctor.sponsorships.index")}}" class="nav-link text-white {{ Request::route()->getName() === 'doctor.sponsorships.index' ? 'my-active' : '' }}" aria-current="page">
                <i class="fa-solid fa-star"></i>
                Sponsorizzazioni
            </a>
    </ul>
    
    
</div>
