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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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
        <h3 class="text-white display-3 mb-4">Offres</h3>
    </div>
</div>
<!-- Header End -->
@endsection
@section('fofo')
<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Packages</h5>
            <h1 class="mb-0">Awesome Packages</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Ville de depart</th>
                        <th>Ville d'arrivée</th>
                        <th>Date</th>
                        <th>Heure de départ</th>
                        <th>Heure d'arrivée</th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($voyages as $voyage)
                    <tr>
                        <td>{{ $voyage->villeDepart->nom }}</td>
                        <td>{{ $voyage->villeArrivee->nom }}</td>
                        <td>{{ $voyage->date }}</td>
                        <td>{{ $voyage->heure_depart }}</td>
                        <td>{{ $voyage->heure_depart }}</td>
                        <td>{{ $voyage->prix . ' Dh' }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                {{-- <a href="{{route('travel.book',$voyage->id)}}" class="btn btn-primary">Details</a> --}}
                                <a href="{{ route('travel.reserve', ['id' => $voyage->id]) }}" class="btn btn-primary">Reserver</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
