@extends('master.layout')

@section('title', 'Edit Permission')

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
                    Edit Permission
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
                            <form action="{{ route('admin.permissions.update', $permission) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name" class="form-label">Permission Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}" placeholder="Permission name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success">Modify</button>
                                    <a href="{{ route('admin.permissions.index') }}" class="btn btn-primary">Permissions List</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Roles</h3>
                            <div class="flex space-x-2 mt-4 p-2">
                                @if ($permission->roles)
                                    @foreach ($permission->roles as $permission_role)
                                        <form action="{{ route('admin.permissions.roles.remove', [$permission->id, $permission_role->id]) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">{{ $permission_role->name }}</button>
                                        </form>
                                    @endforeach
                                @endif
                            </div>
                            <div class="max-w-xl mt-x-6">
                                <form method="POST" action="{{ route('admin.permissions.roles', $permission->id) }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Roles</label>
                                        <select id="role" name="role" class="form-control">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success">Assign</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
