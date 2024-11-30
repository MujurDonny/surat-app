@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Daftar Petugas</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Bergabung</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petugas as $petugasItem)
            <tr>
                <td>{{ $petugasItem->id }}</td>
                <td>{{ $petugasItem->name }}</td>
                <td>{{ $petugasItem->email }}</td>
                <td>{{ $petugasItem->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
