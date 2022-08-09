<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>

        @guest
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('form')}}">Inserisci la tua canzone</a>
        </li>
        @endguest

      </ul>
      <ul class="navbar-nav ms-auto">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('user')}}">Utente: {{Auth::user()->name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="{{route('logout')}}" onclick="event.preventDefault() ; document.querySelector('#form-logout').submit();">Logout</a>
          <form id="form-logout" action="{{ route('logout')}}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
        @endguest
      </ul>
        
    </div>
  </div>
</nav>