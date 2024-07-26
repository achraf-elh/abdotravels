@extends('master.layout')

@section('title', 'Liste des Rôles')

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
                    Liste des Rôles
                </h3>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Liste des Rôles</h6>
                    <div class="text-right">
                        <a href="{{ route('admin.roles.create') }}" class="btn btn-success">Créer un Rôle</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nom du Rôle</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-warning btn-sm mx-2">Modifier</a>
                                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
