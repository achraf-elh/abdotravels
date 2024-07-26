@extends('template.services')
@section('title')
services
    
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

@section('spinner start')
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
                <h3 class="text-white display-3 mb-4">Nos Services</h1>
            </div>
        </div>
        <!-- Header End -->
    
@endsection
@section('services')
 <!-- Services Start -->
 <div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Services</h5>
            <h1 class="mb-0">Nos Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="row g-4">
                    
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Autocar</h5>
                                <p class="mb-0">Un autocar confortable offre une expérience de voyage agréable grâce à des sièges ergonomiques équipés de coussins moelleux, parfaits pour de longs trajets. Il est également doté d'un système de climatisation efficace, garantissant une température idéale.
                                </p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-bus fa-4x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Voyage</h5>
                                <p class="mb-0">Un autocar confortable garantit le respect de la durée de voyage prévue, en évitant les détours inutiles dans les villes passagères. Grâce à des itinéraires optimisés, le trajet se déroule sans perte de temps, tout en maintenant une vitesse régulière et sécurisée.
                                </p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-route fa-4x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-couch fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Comfort</h5>
                                <p class="mb-0">Un des principaux atouts de l'agence est d'offrir des prix accessibles à tous, sans compromettre la qualité des services. Les tarifs sont conçus pour convenir à tous les budgets, permettant à chacun de profiter d'un voyage confortable et agréable.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-user-tie fa-4x text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Guides</h5>
                                <p class="mb-0">L'équipe de l'agence joue un rôle essentiel pour garantir un voyage agréable et sans stress pour les passagers. Le personnel de l'agence est formé pour offrir un service client exceptionnel, répondant aux besoins et aux préoccupations des voyageurs avec courtoisie.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
    
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