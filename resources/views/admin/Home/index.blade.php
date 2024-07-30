@extends('admin.layouts.app')
<title>@yield('title', 'Dashboard')</title>
@section('content')
<main>
    <div class="container-fluid px-4">
       <div class="d-flex align-items-center justify-content-between">
        <h1 class="mt-4">Users</h1>
        @if ($isSuperAdmin)
        <a href="{{route('admin.register')}}" class="btn btn-primary btn-sm">Create</a>
        @endif
       </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>IsAdmin</th>
                            <th>IsActive</th>
                            <th>Create Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>IsAdmin</th>
                            <th>IsActive</th>
                            <th>Create Date</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ $user->isAdmin === 1 ? "Admin" : ($user->isSuperAdmin === 1 ? "Super Admin" : "User") }}</td>
                            <td>{{$user->isActive === 1 ? "Active" : "Suspended"}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <a href="{{$isSuperAdmin == 0 ? route('admin.single.user.update',['slug' => $user->slug]) : route('admin.user.update',['slug' => $user->slug]) }}" class="btn btn-warning btn-sm">Update</a>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

              