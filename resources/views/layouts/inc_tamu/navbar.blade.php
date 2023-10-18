<nav class="navbar navbar-expand-md navbar-dark bg-info shadow">
    <div class="container">
        <a class="navbar-brand h1" href="{{ route('home')}}">
            <img src="images/logo.JPEG" width="30" height="30" class="d-inline-block align-top img-circle" alt="Logo">
            Hotel Rina
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href=" {{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kamar')  }}">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('fasilitas') }}">Fasilitas</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
