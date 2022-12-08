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
                    <a href="kitabAudio" class="nav-item nav-link {{ $title === 'Kitab Audio' ? 'active' : '' }}">Kitab
                        Audio</a>
                    <a type="button" class="btn text-light dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">TWS</a></li>
                        <li><a class="dropdown-item" href="#">Headset</a></li>
                        <li><a class="dropdown-item" href="#">Speaker</a></li>
                        <li><a class="dropdown-item" href="#">Wreless Headphone</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sound Card</a></li>
                        <li><a class="dropdown-item" href="#">Kable</a></li>
                        <li><a class="dropdown-item" href="#">IEM</a></li>
                        <li><a class="dropdown-item" href="#">DAC</a></li>
                        <li><a class="dropdown-item" href="#">Mic</a></li>
                        <li><a class="dropdown-item" href="#">Eartips</a></li>
                    </ul>
                </div>

                <a href="kitabKeyboard"
                    class="nav-item nav-link {{ $title === 'Kitab Keyboard' ? 'active' : '' }}">Kitab Keyboard</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="login" class="nav-item nav-link {{ $title === "Gunsan's Only Page" ? 'active' : '' }}">Admin</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->
