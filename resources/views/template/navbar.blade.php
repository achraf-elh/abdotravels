    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{url('/travel/home')}}" class="navbar-brand p-0">
                {{-- <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Abdou Travel</h1> --}}
           <img class="fa fa-map-marker-alt me-3" src="{{asset('tempcss/img/logo.Jpg')}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/travel/home')}}" class="nav-item nav-link">Acceuil</a>
                    <a href="{{url('/travel/services')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('/travel/Offres')}}" class="nav-item nav-link">Offres</a>
                    <a href="{{url('/travel/booking')}}" class="nav-item nav-link">Réservation</a>
                    <a href="{{url('/travel/contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->