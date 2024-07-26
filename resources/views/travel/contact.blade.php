@extends('template.contact')
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
@section('title')
contact
    
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
        <h3 class="text-white display-3 mb-4">Contactez Nous</h1>  
    </div>
</div>
<!-- Header End -->
    
@endsection
@section('contact')
<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Nous Contacter</h5>
            <h1 class="mb-0">Contactez-nous pour toute question</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-4">
                <div class="bg-white rounded p-4">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                        <h4 class="text-primary"><Adresse></Adresse></h4>
                        <p class="mb-0">Casablanca, MAR</p>
                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary">Tél</h4>
                        <p class="mb-0">+212 645 678 900</p>
                    </div>
                   
                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary">Email</h4>
                        <p class="mb-0">Abdou-Travel@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h3 class="mb-2">Envoyez-nous un message</h3>
                @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erreur :</strong> Veuillez corriger les erreurs ci-dessous et réessayer.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="name" name="name" placeholder="Votre nom" >
                                <label for="name">Votre nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" id="email" name="email" placeholder="Votre email" >
                                <label for="email">Votre email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Sujet" >
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0" placeholder="Laissez un message ici" id="message" name="message" style="height: 160px" ></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="col-12">
                <div class="rounded">
                    {{-- <iframe class="rounded w-100" 
                    style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sfr!2sfr!4v1694259649153!5m2!1sfr!2sfr" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe> --}}
                    <iframe class="rounded w-100" 
                    style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.56000747066!2d-7.669394203817706!3d33.5724032324509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca!5e0!3m2!1sfr!2sma!4v1720045561261!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

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