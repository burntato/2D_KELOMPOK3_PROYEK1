@extends('layouts.dashboard.app')

@section('title', 'New Remaja')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">New Remaja</div>
    <form action="{{ route('remaja.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" pattern="[a-zA-Z]*" class="form-control">
        <p>Nama tidak bisa menggunakan nomor</p>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
      </div>

      {{-- <div class="form-group">
        <label for="usia">Usia</label>
        <input type="number" name="usia" id="usia" class="form-control">
      </div> --}}

      <div class="form-group">
        <label for="usia">Usia</label>
        <select name="usia" id="usia" class="form-control">
          {{-- 12 - 25 --}}
          <option value="12">12 Tahun</option>
          <option value="13">13 Tahun</option>
          <option value="14">14 Tahun</option>
          <option value="15">15 Tahun</option>
          <option value="16">16 Tahun</option>
          <option value="17">17 Tahun</option>
          <option value="18">18 Tahun</option>
          <option value="19">19 Tahun</option>
          <option value="20">20 Tahun</option>
          <option value="21">21 Tahun</option>
          <option value="22">22 Tahun</option>
          <option value="23">23 Tahun</option>
          <option value="24">24 Tahun</option>
          <option value="25">25 Tahun</option>
        </select>
      </div>

      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" placeholder="Berat berdasarkan KG" class="form-control">
      </div>
      <div class="form-group">
        <label for="tb">Tinggi Badan</label>
        <input type="text" name="tb" id="tb" placeholder="Tinggi berdasarkan CM" class="form-control">
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="text" name="tensi" id="tensi" class="form-control">
      </div>
      <div class="form-group">
        <label for="lila">Lingkar Lengan</label>
        <input type="text" name="lila" id="lila" placeholder="Diameter CM" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
@endsection
