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
                <h3 class="text-white display-3 mb-4">Détails du Voyage</h1>  
            </div>
        </div>
        <!-- Header End -->
@endsection
@section('toor booking')

<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Ville de Départ</th>
            <td>{{ $voyage->villeDepart->nom }}</td>
        </tr>
        <tr>
            <th>Ville d'Arrivée</th>
            <td>{{ $voyage->villeArrivee->nom }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ $voyage->date }}</td>
        </tr>
        <tr>
            <th>Heure de Départ</th>
            <td>{{ $voyage->heure_depart }}</td>
        </tr>
        <tr>
            <th>Heure d'Arrivée</th>
            <td>{{ $voyage->heure_arrivee }}</td>
        </tr>
        <tr>
            <th>Durée</th>
            <td>{{ $voyage->calculerDuree() }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ $voyage->prix.' Dh' }}</td>
        </tr>
        <tr>
            <th>Reserver</th>
            <td>
            <a href="{{ route('travel.reserve', ['id' => $voyage->id]) }}">
                <button type="button" class="btn btn-primary">Reserver</button>
            </a>
            </td>
        </tr>
    </table>
</div>


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
@section('title')
booking
@endsection