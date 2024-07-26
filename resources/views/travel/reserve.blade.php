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
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h3 class="mb-4">Réserver votre voyage</h3>
            <form method="POST" action="{{ route('travel.reserve.store') }}">
                @csrf
                <input type="hidden" name="voyage_id" value="{{ $voyage->id }}">
                
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" placeholder="Votre nom" value="{{ old('nom') }}" required>
                    @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" placeholder="Votre prénom" value="{{ old('prenom') }}" required>
                    @error('prenom')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Votre email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" placeholder="Votre numéro de téléphone" value="{{ old('telephone') }}" required>
                    @error('telephone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Réserver</button>
                </div>
            </form>
        </div>
    </div>
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


