@extends('master.layout')

@section('title', 'Modifier ville')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('master.navbar')

        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title text-center text-success">
                    Modifier une ville
                </h3>
            </div>
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
                            <form action="{{ route('villes.update', $villes->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="nom" class="form-label">Nom ville :</label>
                                    <input type="text" class="form-control" name="nom" value="{{ $villes->nom }}"
                                        placeholder="ville">
                                </div>
                                <div class="mb-4">
                                    <label for="image" class="form-label">Image :</label>
                                    <input type="file" class="" name="image">
                                    @if ($villes->image)
                                        <div class="mt-2 my-4">
                                            <h3 class="text-primary">Image enregistré : </h3>
                                            <img src="{{ asset('uploads/' . $villes->image) }}" alt="Image de {{ $villes->nom }}" width="300">
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
