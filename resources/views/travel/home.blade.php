@extends('template.booking')
@section('style')
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('tempcss/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('tempcss/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('tempcss/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('tempcss/css/style.css')}}" rel="stylesheet">
        <style>.img-fixed-size {
            width: 100%;
            height: 200px; /* Définissez la hauteur souhaitée */
            object-fit: cover; /* Remplira le conteneur tout en gardant le ratio d'aspect */
            object-position: center; /* Centre l'image dans le conteneur */
        }
        </style>
@endsection
@section('title')
Acceuil
@endsection
@section('spinner')
        <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
@endsection
@section('nav hero')
            <!-- Navbar & Hero Start -->
            <div class="container-fluid position-relative p-0">
                
    
                <!-- Carousel Start -->
                <div class="carousel-header">
                    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="{{asset('tempcss/img/autocar3.jpg')}}" class="img-fluid" alt="Image">
                                <div class="carousel-caption">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">EXPLORONS ENSEMBLE</h4>
                                        <h1 class="display-2 text-capitalize text-white mb-4">Faisons Le Voyage Ensemble !!</h1>
                                        <p class="mb-5 fs-5">Choisissez votre destination et votre horaire et Réserver facilement votre voyage
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('tempcss/img/autocar1.jpg')}}" class="img-fluid" alt="Image">
                                <div class="carousel-caption">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">EXPLORONS ENSEMBLE</h4>
                                        <h1 class="display-2 text-capitalize text-white mb-4">Trouvez Votre Visite Idéale Avec ABDOU Travel</h1>
                                        <p class="mb-5 fs-5">Choisissez votre destination et votre horaire et Réserver facilement votre voyage
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('tempcss/img/autocar2.jpg')}}" class="img-fluid" alt="Image">
                                <div class="carousel-caption">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">EXPLORONS ENSEMBLE</h4>
                                        <h1 class="display-2 text-capitalize text-white mb-4">Vous Aimez Y Aller?</h1>
                                        <p class="mb-5 fs-5">Choisissez votre destination et votre horaire et Réserver facilement votre voyage
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- Carousel End -->
            </div>
            <!-- Navbar & Hero End -->
@endsection
@section('destination')
            <!-- Destination Start -->
            <div class="container-fluid destination py-5">
                <div class="container py-5">
                    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                        <h5 class="section-title px-3">Destinations</h5>
                        <h1 class="mb-0">Les destinations populaire</h1>
                    </div>
                    <div class="tab-class text-center">
                        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                            @foreach ($villes as $ville)
                            <li class="nav-item">
                                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                    <span class="text-dark" style="width: 150px;">{{$ville->nom}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        {{-- @if(session('alert'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('alert') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}

<div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">
            @foreach($villes as $ville)
                <div class="col-lg-4">
                    <div class="destination-img">
                        <img class="img-fluid rounded w-100" src="{{ asset('uploads/' . $ville->image) }}" alt="">
                        <div class="destination-overlay p-4">
                            {{-- <a href="#" class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a> --}}
                            <h4 class="text-white mb-2 mt-3">{{ $ville->nom }}</h4>
                            {{-- <a href="#" class="btn-hover text-white">View All Place <i class="fa fa-arrow-right ms-2"></i></a> --}}
                        </div>
                        <div class="search-icon">
                            {{-- <a href="{{ asset('uploads/' . $ville->image) }}" data-lightbox="destination-{{ $loop->index }}"><i class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

                    </div>
                </div>
            </div>
            <!-- Destination End -->
@endsection







@section('script')
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('tempcss/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('tempcss/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('tempcss/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('tempcss/lib/lightbox/js/lightbox.min.js')}}"></script>
        
    
        <!-- Template Javascript -->
        <script src="{{asset('tempcss/js/main.js')}}"></script>
@endsection