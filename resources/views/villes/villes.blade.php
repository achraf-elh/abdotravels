@extends('master.layout')
@section('title')
    tables
@endsection
@section('content')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('master.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card-header">
                        <h3 class="card-title text-center text-success">
                            Ajouter une ville
                        </h3>
                    </div>

                    <!-- Content Row -->
                    <div class="row my-4">
                                <div class="col-md-12 mx-auto">
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
                                            <form action="{{route('villes.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                <div class="mb-4">
                                                    <label for="nom" class="form-label">Nom ville :</label>
                                                    <input type="text" class="form-control" name="nom" placeholder="ville">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="image" class="form-label">Image :</label>
                                                    <input type="file" class="form-label" name="image">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
