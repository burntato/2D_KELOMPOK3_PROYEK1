@extends('layouts.dashboard.app')

@section('title', 'Lansia')

@section('header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7"></div>
  <div class="col-lg-6 col-5 text-right">
    <a href="{{ route('lansia.create') }}" class="btn btn-sm btn-neutral">New</a>
  </div>
</div>
@endsection

@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('failed'))
<div class="alert alert-danger">{{ session('failed') }}</div>
@endif


<div class="card">
  <div class="card-body">
    <div class="card-title">Data Lansia</div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Usia</th>
          <th>Berat Badan</th>
          <th>Tensi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lansias as $lansia)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $lansia->name }}</td>
          <td>{{ $lansia->jk }}</td>
          <td>{{ $lansia->usia }}</td>
          <td>{{ $lansia->bb }}</td>
          <td>{{ $lansia->tensi }}</td>
          <td>
            <a href="{{ route('lansia.edit', $lansia->id) }}" class="btn btn-primary btn-sm rounded">Ubah</a>
            <form action="{{ route('lansia.destroy', $lansia->id) }}" method="post" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm rounded">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection