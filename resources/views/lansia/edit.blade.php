@extends('layouts.dashboard.app')

@section('title', 'Edit Lansia')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">Ubah Lansia</div>
    <form action="{{ route('lansia.update', $lansium->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $lansium->name }}">
        <p>Nama tidak bisa menggunakan nomor</p>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option @selected($lansium->jk == 'L') value="L">L</option>
          <option @selected($lansium->jk == 'P') value="P">P</option>
        </select>
      </div>

      <div class="form-group">
        <label for="usia">Usia</label>
        <select name="usia" id="usia" class="form-control" value="{{ $lansium->usia }}">
          {{-- 46 - 65 --}}
          <option @selected($lansium->usia == '46') value="46">46 Tahun</option>
          <option @selected($lansium->usia == '47') value="47">47 Tahun</option>
          <option @selected($lansium->usia == '48') value="48">48 Tahun</option>
          <option @selected($lansium->usia == '49') value="49">49 Tahun</option>
          <option @selected($lansium->usia == '50') value="50">50 Tahun</option>
          <option @selected($lansium->usia == '51') value="51">51 Tahun</option>
          <option @selected($lansium->usia == '52') value="52">52 Tahun</option>
          <option @selected($lansium->usia == '53') value="53">53 Tahun</option>
          <option @selected($lansium->usia == '54') value="54">54 Tahun</option>
          <option @selected($lansium->usia == '55') value="55">55 Tahun</option>
          <option @selected($lansium->usia == '56') value="56">56 Tahun</option>
          <option @selected($lansium->usia == '57') value="57">57 Tahun</option>
          <option @selected($lansium->usia == '58') value="58">58 Tahun</option>
          <option @selected($lansium->usia == '59') value="59">59 Tahun</option>
          <option @selected($lansium->usia == '60') value="60">60 Tahun</option>
          <option @selected($lansium->usia == '61') value="61">61 Tahun</option>
          <option @selected($lansium->usia == '62') value="62">62 Tahun</option>
          <option @selected($lansium->usia == '63') value="63">63 Tahun</option>
          <option @selected($lansium->usia == '64') value="64">64 Tahun</option>
          <option @selected($lansium->usia == '65') value="65">65 Tahun</option>
        </select>
      </div>

      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" value="{{ $lansium->bb }}">
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="text" name="tensi" id="tensi" class="form-control" value="{{ $lansium->tensi }}">
      </div>
      <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
  </div>
</div>
@endsection
