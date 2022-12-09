@extends('layouts.dashboard.app')

@section('title', 'Edit Balita')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">Ubah Balita</div>
    <form action="{{ route('balita.update', $balitum->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $balitum->name }}" required>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option @selected($balitum->jk == 'L') value="L">L</option>
          <option @selected($balitum->jk == 'P') value="P">P</option>
        </select>
      </div>

      <div class="form-group">
          <label for="usia">Usia</label>
          <select name="usia" id="usia" class="form-control" value="{{ $balitum->usia }}">
          <option @selected($balitum->usia == '1') value="1">1 Tahun</option>
          <option @selected($balitum->usia == '2') value="2">2 Tahun</option>
          <option @selected($balitum->usia == '3') value="3">3 Tahun</option>
          <option @selected($balitum->usia == '4') value="4">4 Tahun</option>
          <option @selected($balitum->usia == '5') value="5">5 Tahun</option>
          </select>
      </div>

      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" value="{{ $balitum->bb }}" required>
      </div>
      <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
  </div>
</div>
@endsection
