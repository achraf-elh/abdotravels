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
                <h3 class="text-white display-3 mb-4">Reservation en ligne</h1>  
            </div>
        </div>
        <!-- Header End -->
@endsection
@section('toor booking')
        <!-- Tour Booking Start -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div id="content-wrapper" class="d-flex flex-column">
                        <div id="content">
                            
                    
                            <div class="container-fluid">
                                
                                <div class="row my-4">
                                    
                                    <div class="col-md-8 mx-auto">
                                        <div class="card-header">
                                            <h1 class="card-title text-center text-white">
                                                Trouver un voyage
                                            </h1>
                                        </div>
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <div class="card">
                                            <div class="card-body">
                                                <!-- resources/views/partials/search-form.blade.php -->

                                                <form action="{{ route('travel.voyages.search') }}" method="POST">
                                                    @csrf
                                                
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select bg-white border-0 @error('ville_depart_id') is-invalid @enderror" id="ville_depart_id" name="ville_depart_id">
                                                                    <option value="">Sélectionnez une ville de départ</option>
                                                                    @foreach ($villes as $v)
                                                                        <option value="{{ $v->id }}" {{ old('ville_depart_id') == $v->id ? 'selected' : '' }}>
                                                                            {{ $v->nom }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="ville_depart_id">Ville de départ</label>
                                                                @error('ville_depart_id')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating">
                                                                <select class="form-select bg-white border-0 @error('ville_arrivee_id') is-invalid @enderror" id="ville_arrivee_id" name="ville_arrivee_id">
                                                                    <option value="">Sélectionnez une ville d'arrivée</option>
                                                                    @foreach ($villes as $v)
                                                                        <option value="{{ $v->id }}" {{ old('ville_arrivee_id') == $v->id ? 'selected' : '' }}>
                                                                            {{ $v->nom }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <label for="ville_arrivee_id">Ville d'arrivée</label>
                                                                @error('ville_arrivee_id')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                                                <input type="date" class="form-control bg-white border-0 @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" placeholder="Date">
                                                                <label for="date">Date</label>
                                                                @error('date')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary text-white w-100 py-3">Rechercher</button>
                                                </form>
                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tour Booking End -->
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