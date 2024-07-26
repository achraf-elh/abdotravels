@extends('master.layout')

@section('title', 'Liste des voyages')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        
        @include('master.navbar')

        <div class="container-fluid">
            <div class="card-header">
                <h3 class="card-title text-center text-success">
                    Liste des voyages
                </h3>
            </div>
            <div class="row mx-8 my-5">
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="col-md-12 mb-2">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">N° voyages</th>
                                    <th scope="col">Ville départ</th>
                                    <th scope="col">Ville arrivée</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Heure départ</th>
                                    <th scope="col">Heure arrivée</th>
                                    <th scope="col">Durée</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voyages as $v)
                                    <tr>
                                        <td scope="row">{{ $v->id }}</td>
                                        <td>{{ $v->villeDepart->nom ?? 'N/A' }}</td>
                                        <td>{{ $v->villeArrivee->nom ?? 'N/A' }}</td>
                                        <td>{{ $v->date }}</td>
                                        <td>{{ $v->heure_depart }}</td>
                                        <td>{{ $v->heure_arrivee }}</td>
                                        <td>{{ $v->calculerDuree() }}</td>
                                        <td>{{ $v->prix }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Actions">
                                                <a href="{{ route('voyages.edit', $v->id) }}" class="btn btn-sm btn-warning mx-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M11.88 0l1.06 1.06L2.22 12.28l-1.06-4.2L11.88 0zm2.54 1.06a1.5 1.5 0 0 0 0 2.12l-1.06 1.06-3.18-3.18 1.06-1.06a1.5 1.5 0 0 0 2.12 0l.06-.06zM1.293 13.293l10 10a1 1 0 0 0 1.414-1.414l-10-10-1.414 1.414zM14 11l1 1-3 3h-1v-1l3-3z"/>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('voyages.delete', $v->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce voyage?')" class="btn btn-sm btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M3 5V3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5V5H3z"/>
                                                            <path fill-rule="evenodd" d="M4 6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6zm6 1a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5z"/>
                                                            <path fill-rule="evenodd" d="M5 6a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6zm2-1a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $voyages->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
