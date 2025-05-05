@extends('layouts.main')

@section('content')
    <h1>Program Studi</h1>

    @foreach ($prodi as $item)
        <h2>{{ $item->nama }}</h2>
        <p>Singkatan: {{ $item->singkatan }}</p>
        <p>Fakultas: {{ $item->fakultas->nama }}</p>
    @endforeach
@endsection