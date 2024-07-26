@extends('master.layout')

@section('title', 'Modifier un voyage')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">

        @include('master.navbar')

        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title text-center text-success">
                    Modifier un voyage
                </h3>
            </div>
            <div class="row my-5">
                <div class="col-md-6 offset-md-3">
                    <form action="{{ route('voyages.update', $voyage->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="ville_depart_id" class="form-label">Ville de départ</label>
                            <select class="form-select" id="ville_depart_id" name="ville_depart_id">
                                @foreach ($villes as $ville)
                                    <option value="{{ $ville->id }}" {{ $voyage->ville_depart_id == $ville->id ? 'selected' : '' }}>{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                            @error('ville_depart_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="ville_arrivee_id" class="form-label">Ville d'arrivée</label>
                            <select class="form-select" id="ville_arrivee_id" name="ville_arrivee_id">
                                @foreach ($villes as $ville)
                                    <option value="{{ $ville->id }}" {{ $voyage->ville_arrivee_id == $ville->id ? 'selected' : '' }}>{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                            @error('ville_arrivee_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Heure de départ</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $voyage->date) }}">
                            @error('date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="heure_depart" class="form-label">Heure de départ</label>
                            <input type="time" class="form-control" id="heure_depart" name="heure_depart" value="{{ old('heure_depart', $voyage->heure_depart) }}">
                            @error('heure_depart')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="heure_arrivee" class="form-label">Heure d'arrivée</label>
                            <input type="time" class="form-control" id="heure_arrivee" name="heure_arrivee" value="{{ old('heure_arrivee', $voyage->heure_arrivee) }}">
                            @error('heure_arrivee')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix', $voyage->prix) }}">
                            @error('prix')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <a href="{{ route('voyages.index') }}" class="btn btn-secondary">Retour</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
