@extends('component.header')

<body>
    
    {{-- Head Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hello Balee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/education') }}">Education</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- section content --}}
    @yield('content')

    {{-- footer bar --}}
    <footer class="mt-auto">
        <div class="row align-items-end">
            <div class="text-center align-self-end">
                By Muhammad Iqbal Gobel
            </div>
        </div>
    </footer>

    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
