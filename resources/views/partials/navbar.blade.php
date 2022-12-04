<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            {{ $name }}
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/" class="nav-item nav-link {{ ($title === "Home") ? 'active' : '' }}">Home</a>
                <a href="kitabAudio" class="nav-item nav-link {{ ($title === "Kitab Audio") ? 'active' : '' }}">Kitab Audio</a>
                <a href="kitabKeyboard" class="nav-item nav-link {{ ($title === "Kitab Keyboard") ? 'active' : '' }}">Kitab Keyboard</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="login" class="nav-item nav-link {{ ($title === "Gunsan's Only Page") ? 'active' : '' }}">I'am Gunsan</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->
