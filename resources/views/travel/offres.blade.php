@extends('template.offres')
@section('title')
offres
    
@endsection
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
@section('header start')
  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Offres</h1>  
    </div>
</div>
<!-- Header End -->    
@endsection
@section('fofo')
<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        @if(session('alert'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('alert') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3"> tous Les voyages </h5>
            <h1 class="mb-0">Offres spécials</h1>
        </div>
        <div class="packages-carousel owl-carousel">
            @foreach($voyages as $voyage)
                <div class="packages-item">
                    <div class="packages-img">
                        <img src="{{ asset('uploads/' . $voyage->getImageVilleArriveeAttribute()) }}" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>{{ $voyage->villeDepart->nom }}-{{ $voyage->villeArrivee->nom }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{ $voyage->date }}</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-clock me-2"></i>{{ $voyage->heure_depart }}</small>
                        </div>
                        <div class="packages-price py-2 px-4">{{$voyage->prix.' Dh'}}</div>
                    </div>
                    <div class="packages-content bg-light">
                        
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="{{route('travel.book',$voyage->id)}}" class="btn-hover btn text-white py-2 px-4">Details</a>
                            </div>
                            <div class="col-6 text-end px-0">
                                <a href="{{ route('travel.reserve', ['id' => $voyage->id]) }}">
                                    <button type="button" class="btn btn-primary">Reserver</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->


    
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