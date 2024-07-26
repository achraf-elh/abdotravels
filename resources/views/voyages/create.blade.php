@extends('master.layout')

@section('title', 'Ajouter voyage')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('master.navbar')

        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title text-center text-success">
                    Ajouter un voyage
                </h3>
            </div>
            <div class="row my-4">
                <div class="col-md-8 mx-auto">
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
                            <form action="{{ route('voyages.store') }}" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label for="ville_depart_id" class="form-label">Ville de départ</label>
                                    <select name="ville_depart_id" id="ville_depart_id" class="form-select">
                                        <option value="">Sélectionnez une ville</option>
                                        @foreach ($villes as $v)
                                        <option value="{{ $v->id }}" {{ old('ville_depart_id') == $v->id ? 'selected' : '' }}>
                                            {{ $v->nom }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ville_arrivee_id" class="form-label">Ville d'arrivée</label>
                                    <select name="ville_arrivee_id" id="ville_arrivee_id" class="form-select">
                                        <option value="">Sélectionnez une ville</option>
                                        @foreach ($villes as $v)
                                        <option value="{{ $v->id }}" {{ old('ville_arrivee_id') == $v->id ? 'selected' : '' }}>
                                            {{ $v->nom }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date"
                                         value="{{ old('date') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heure_depart" class="form-label">Heure de départ</label>
                                    <input type="time" class="form-control" name="heure_depart"
                                        placeholder="Heure de départ" value="{{ old('heure_depart') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="heure_arrivee" class="form-label">Heure d'arrivée</label>
                                    <input type="time" class="form-control" name="heure_arrivee"
                                        placeholder="Heure d'arrivée" value="{{ old('heure_arrivee') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="prix" class="form-label">Prix</label>
                                    <input type="text" class="form-control" name="prix" placeholder="Prix"
                                        value="{{ old('prix') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter voyage</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
