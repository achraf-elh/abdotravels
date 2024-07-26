@extends('master.layout')
@section('title')
    tables
@endsection
@section('content')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                {{-- @include('master.navbar') --}}

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="text-center">
                        <div class="error mx-auto" data-text="500">500</div>
                        <p class="lead text-gray-800 mb-5">Ereur au niveau de serveur</p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                        <a href="{{url('/')}}">&larr; Back to Profile</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
