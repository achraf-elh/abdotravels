@extends('master.layout')

@section('title', 'Permissions List')

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
                    Permissions List
                </h3>
            </div>

            <!-- Content Row -->
            <div class="row my-4">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex justify-end p-2">
                                <a href="{{ route('admin.permissions.create') }}" class="btn btn-success">Create Permission</a>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-info">Edit</a>
                                                <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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
</div>
@endsection
