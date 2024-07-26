@extends('master.layout')

@section('title', 'Détails Utilisateur')

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
                    Détails de l'Utilisateur
                </h3>
            </div>

            <!-- User Details -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="mb-4">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Liste des Utilisateurs</a>
                    </div>
                    <div class="mb-4">
                        <h4 class="font-weight-bold">Nom de l'utilisateur: {{ $user->name }}</h4>
                        <h4 class="font-weight-bold">Email de l'utilisateur: {{ $user->email }}</h4>
                    </div>

                    <!-- User Roles -->
                    <div class="mt-6">
                        <h4 class="font-weight-bold">Rôles</h4>
                        <div class="d-flex flex-wrap mt-2">
                            @if ($user->roles)
                                @foreach ($user->roles as $user_role)
                                    <form method="POST" action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}" onsubmit="return confirm('Êtes-vous sûr?');" class="m-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">{{ $user_role->name }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-3">
                            <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="role">Rôles</label>
                                    <select id="role" name="role" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Assigner</button>
                                @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                            </form>
                        </div>
                    </div>

                    <!-- User Permissions -->
                    <div class="mt-6">
                        <h4 class="font-weight-bold">Permissions</h4>
                        <div class="d-flex flex-wrap mt-2">
                            @if ($user->permissions)
                                @foreach ($user->permissions as $user_permission)
                                    <form method="POST" action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}" onsubmit="return confirm('Êtes-vous sûr?');" class="m-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">{{ $user_permission->name }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-3">
                            <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="permission">Permissions</label>
                                    <select id="permission" name="permission" class="form-control">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Assigner</button>
                                @error('permission') <span class="text-danger">{{ $message }}</span> @enderror
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
