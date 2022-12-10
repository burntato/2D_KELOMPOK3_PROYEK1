@extends('layouts.dashboard.app')

@section('title', 'New Lansia')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">New Lansia</div>
    <form action="{{ route('lansia.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" pattern="[a-zA-Z\s]+" class="form-control">
        <p>Nama tidak bisa menggunakan nomor</p>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
      </div>

      <div class="form-group">
        <label for="usia">Usia</label>
        <select name="usia" id="usia" class="form-control" required>
          {{-- 46 - 65 --}}
            <option value="46">46 Tahun</option>
            <option value="47">47 Tahun</option>
            <option value="48">48 Tahun</option>
            <option value="49">49 Tahun</option>
            <option value="50">50 Tahun</option>
            <option value="51">51 Tahun</option>
            <option value="52">52 Tahun</option>
            <option value="53">53 Tahun</option>
            <option value="54">54 Tahun</option>
            <option value="55">55 Tahun</option>
            <option value="56">56 Tahun</option>
            <option value="57">57 Tahun</option>
            <option value="58">58 Tahun</option>
            <option value="59">59 Tahun</option>
            <option value="60">60 Tahun</option>
            <option value="61">61 Tahun</option>
            <option value="62">62 Tahun</option>
            <option value="63">63 Tahun</option>
            <option value="64">64 Tahun</option>
            <option value="65">65 Tahun</option>
        </select>
      </div>

      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" placeholder="Berat berdasarkan KG" class="form-control">
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="number" name="tensi" id="tensi" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
@endsection
