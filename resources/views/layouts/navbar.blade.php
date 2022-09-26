<nav class="navbar navbar-expand-lg bg-emerald-500">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Logo goes here</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-link {{ Request::is('rooms') ? 'active' : '' }}">
                <a href="{{ url('/rooms') }}">Rooms</a>
            </li>
            <li class="nav-link {{ Request::is('facility') ? 'active' : '' }}">
                <a href="{{ url('/facility') }}">Facility</a>
            </li>
            <li class="nav-link {{ Request::is('about') ? 'active' : '' }}">
                <a href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-link {{ Request::is('contact') ? 'active' : '' }}">
                <a href="{{ url('/contact') }}">Contact</a>
            </li>
            </ul>
        </div>
    </div>
</nav>