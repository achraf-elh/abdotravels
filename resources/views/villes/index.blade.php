@extends('master.layout')

@section('title', 'Tables')

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
                    Listes des villes
                </h3>
            </div>
            @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Liste des Villes</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>N° ville</th>
                                    <th>Ville</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($villes as $v)
                                <tr>
                                    <td>{{ $v->id }}</td>
                                    <td>{{ $v->nom }}</td>
                                    <td>
                                        @if ($v->image)
                                            <img src="{{ asset('uploads/' . $v->image) }}" alt="Image de {{ $v->nom }}" width="250">
                                        @else
                                            <img src="{{ asset('uploads/default_image.jpg') }}" alt="Image par défaut" width="250">
                                        @endif
                                    </td>
                                    <td>
                                      <div class="btn-group" role="group" aria-label="Actions">
                                        <a href="{{ route('villes.edit', $v->id) }}" class="btn btn-sm btn-warning mx-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M11.88 0l1.06 1.06L2.22 12.28l-1.06-4.2L11.88 0zm2.54 1.06a1.5 1.5 0 0 0 0 2.12l-1.06 1.06-3.18-3.18 1.06-1.06a1.5 1.5 0 0 0 2.12 0l.06-.06zM1.293 13.293l10 10a1 1 0 0 0 1.414-1.414l-10-10-1.414 1.414zM14 11l1 1-3 3h-1v-1l3-3z"/>
                                            </svg>
                                        </a>
                                        <form action="{{ route('villes.delete', $v->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette ville?')" class="btn btn-sm btn-danger">
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
                    </div>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3">
                        {{ $villes->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
