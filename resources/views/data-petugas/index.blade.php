@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pengguna</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->last_login ? $user->last_login->format('d-m-Y H:i') : 'Never logged in' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
