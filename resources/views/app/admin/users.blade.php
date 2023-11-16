@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between mb-3">
        <div>
            <h3>Kelola Users ({{sizeof($users) ?? 0}})</h3>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Total Todolist</th>
                <th scope="col">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($users) && sizeof($users) > 0)
                @php
                    $counter = 1;
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="badge bg-success">{{ $user->role }}</span>
                        </td>
                        <td>
                            <span class="badge bg-primary">{{ $user->total_todo ?? 0 }}</span>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary" href="#">Lihat Todolist</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada data tersedia!</td>
                </tr>
            @endif

        </tbody>
    </table>

@endsection
