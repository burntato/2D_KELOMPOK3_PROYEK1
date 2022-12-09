@extends('layouts.dashboard.app')

@section('title', 'New Dewasa')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">New Dewasa</div>
    <form action="{{ route('dewasa.store') }}" method="post">
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
        {{-- <input type="number" name="usia" id="usia" class="form-control" required> --}}
        <select name="usia" id="usia" class="form-control" required>
          {{-- 26 - 45 --}}
          <option value="26">26 Tahun</option>
          <option value="27">27 Tahun</option>
          <option value="28">28 Tahun</option>
          <option value="29">29 Tahun</option>
          <option value="30">30 Tahun</option>
          <option value="31">31 Tahun</option>
          <option value="32">32 Tahun</option>
          <option value="33">33 Tahun</option>
          <option value="34">34 Tahun</option>
          <option value="35">35 Tahun</option>
          <option value="36">36 Tahun</option>
          <option value="37">37 Tahun</option>
          <option value="38">38 Tahun</option>
          <option value="39">39 Tahun</option>
          <option value="40">40 Tahun</option>
          <option value="41">41 Tahun</option>
          <option value="42">42 Tahun</option>
          <option value="43">43 Tahun</option>
          <option value="44">44 Tahun</option>
          <option value="45">45 Tahun</option>
        </select>
      </div>

      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" placeholder="Berat berdasarkan KG" required>
      </div>
      <div class="form-group">
        <label for="bb">Tinggi Badan</label>
        <input type="number" name="tb" id="bb" class="form-control" placeholder="Tinggi berdasarkan CM" required>
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="number" name="tensi" id="tensi" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
@endsection
