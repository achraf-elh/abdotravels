@extends('master.layout')

@section('title', 'Modifier Role')

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
                    Modifier un Role
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
                            <form action="{{ route('admin.roles.update', $role->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom du Role</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" placeholder="Role name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                    <a href="{{ route('admin.roles.index') }}" class="btn btn-primary">Liste des Roles</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 p-2 bg-slate-100">
                <h2 class="text-2xl font-semibold">Permissions du Role</h2>
                <div class="flex space-x-2 mt-4 p-2">
                    @if ($role->permissions)
                        @foreach ($role->permissions as $role_permission)
                            <form action="{{ route('admin.roles.permissions.revoke', [$role->id, $role_permission->id]) }}" onsubmit="return confirm('Are you sure?')" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">{{ $role_permission->name }}</button>
                            </form>
                        @endforeach
                    @endif
                </div>
                <div class="max-w-xl mt-6">
                    <form method="POST" action="{{ route('admin.roles.permissions', $role->id) }}">
                        @csrf
                        <div class="mb-3">
                            <label for="permission" class="form-label">Permission</label>
                            <select id="permission" name="permission" class="form-control">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Assigner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
