@extends('layouts.dashboard.app')

@section('title', 'Remaja')

@section('header')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7"></div>
  <div class="col-lg-6 col-5 text-right">
    <a href="{{ route('remaja.create') }}" class="btn btn-sm btn-neutral">New</a>
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
    <div class="card-title">Data Remaja</div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Usia</th>
          <th>Berat Badan</th>
          <th>Tinggi Badan</th>
          <th>Tensi</th>
          <th>Lingkar lengan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($remajas as $remaja)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $remaja->name }}</td>
          <td>{{ $remaja->jk }}</td>
          <td>{{ $remaja->usia }}</td>
          <td>{{ $remaja->bb }}</td>
          <td>{{ $remaja->tb }}</td>
          <td>{{ $remaja->tensi }}</td>
          <td>{{ $remaja->lila }}</td>
          <td>
            <a href="{{ route('remaja.edit', $remaja->id) }}" class="btn btn-primary btn-sm rounded">Ubah</a>
            <form action="{{ route('remaja.destroy', $remaja->id) }}" method="post" class="d-inline">
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
