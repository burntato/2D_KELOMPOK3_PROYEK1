@extends('layouts.dashboard.app')

@section('title', 'New Balita')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">New Balita</div>
    <form action="{{ route('balita.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" pattern="[a-zA-Z]*" required>
        <p>Nama tidak bisa menggunakan nomor</p>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control" required>
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
      </div>

      <div class="form-group">
        <label for="usia">Usia</label>
        <select name="usia" id="usia" class="form-control" required>
          <option value="1">1 Tahun</option>
          <option value="2">2 Tahun</option>
          <option value="3">3 Tahun</option>
          <option value="4">4 Tahun</option>
          <option value="5">5 Tahun</option>
        </select>
      </div>

      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" placeholder="Berat berdasarkan KG" required>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
@endsection
