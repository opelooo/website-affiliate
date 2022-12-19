<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            {{ $name }}
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                <div class="btn-group">
                    <a href="/rekomen-audio" class="nav-item nav-link {{ $title === 'Rekomendasi Audio' ? 'active' : '' }}">Rekomendasi Audio</a>
                    <a type="button" class="btn text-light dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/section-tws">TWS</a></li>
                        <li><a class="dropdown-item" href="/section-headset">Headset</a></li>
                        <li><a class="dropdown-item" href="/section-speaker">Speaker</a></li>
                        <li><a class="dropdown-item" href="/section-headphone">Wreless Headphone</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/section-soundcard">Sound Card</a></li>
                        <li><a class="dropdown-item" href="/section-kable">Kable</a></li>
                        <li><a class="dropdown-item" href="/section-iem">IEM</a></li>
                        <li><a class="dropdown-item" href="/section-dac">DAC</a></li>
                        <li><a class="dropdown-item" href="/section-mic">Mic</a></li>
                        <li><a class="dropdown-item" href="/section-eartips">Eartips</a></li>
                    </ul>
                </div>

                <a href="/rekomen-keyboard"
                    class="nav-item nav-link {{ $title === 'Rekomendasi Keyboard' ? 'active' : '' }}">Rekomendasi Keyboard</a>
            </div>
                <ul class="navbar-nav ms-auto" style="padding-right: 2em;">
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" type="button" class="btn text-light dropdown-toggle dropdown-toggle-split" href=""
                                data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">Dasboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item dropdown" style="padding-right: 2em;">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown" style="padding-right: 2em;">
                        <a href="/login" class="nav-item nav-link {{ $title === "Admin" ? 'active' : '' }}">Login admin</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->
