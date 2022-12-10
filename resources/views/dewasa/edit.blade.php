@extends('layouts.dashboard.app')

@section('title', 'Edit Dewasa')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">Ubah Dewasa</div>
    <form action="{{ route('dewasa.update', $dewasa->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" pattern="[a-zA-Z]*" value="{{ $dewasa->name }}">
        <p>Nama tidak bisa menggunakan nomor</p>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option @selected($dewasa->jk == 'L') value="L">L</option>
          <option @selected($dewasa->jk == 'P') value="P">P</option>
        </select>
      </div>

        <div class="form-group">
            <label for="usia">Usia</label>
              <select name="usia" id="usia" class="form-control" value="{{ $dewasa->usia }}">
                {{-- 26 - 45 --}}
                <option @selected($dewasa->usia == '26') value="26">26 Tahun</option>
                <option @selected($dewasa->usia == '27') value="27">27 Tahun</option>
                <option @selected($dewasa->usia == '28') value="28">28 Tahun</option>
                <option @selected($dewasa->usia == '29') value="29">29 Tahun</option>
                <option @selected($dewasa->usia == '30') value="30">30 Tahun</option>
                <option @selected($dewasa->usia == '31') value="31">31 Tahun</option>
                <option @selected($dewasa->usia == '32') value="32">32 Tahun</option>
                <option @selected($dewasa->usia == '33') value="33">33 Tahun</option>
                <option @selected($dewasa->usia == '34') value="34">34 Tahun</option>
                <option @selected($dewasa->usia == '35') value="35">35 Tahun</option>
                <option @selected($dewasa->usia == '36') value="36">36 Tahun</option>
                <option @selected($dewasa->usia == '37') value="37">37 Tahun</option>
                <option @selected($dewasa->usia == '38') value="38">38 Tahun</option>
                <option @selected($dewasa->usia == '39') value="39">39 Tahun</option>
                <option @selected($dewasa->usia == '40') value="40">40 Tahun</option>
                <option @selected($dewasa->usia == '41') value="41">41 Tahun</option>
                <option @selected($dewasa->usia == '42') value="42">42 Tahun</option>
                <option @selected($dewasa->usia == '43') value="43">43 Tahun</option>
                <option @selected($dewasa->usia == '44') value="44">44 Tahun</option>
                <option @selected($dewasa->usia == '45') value="45">45 Tahun</option>
            </select>
        </div>

      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" placeholder="Berat berdasarkan KG" value="{{ $dewasa->bb }}">
      </div>
      <div class="form-group">
        <label for="bb">Tinggi Badan</label>
        <input type="number" name="tb" id="bb" class="form-control" placeholder="Berat berdasarkan KG" value="{{ $dewasa->tb }}">
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="text" name="tensi" id="tensi" class="form-control" value="{{ $dewasa->tensi }}">
      </div>
      <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
  </div>
</div>
@endsection
