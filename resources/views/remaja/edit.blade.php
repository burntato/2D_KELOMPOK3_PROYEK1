@extends('layouts.dashboard.app')

@section('title', 'Edit Remaja')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">Ubah Remaja</div>
    <form action="{{ route('remaja.update', $remajax->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $remajax->name }}">
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option @selected($remajax->jk == 'L') value="L">L</option>
          <option @selected($remajax->jk == 'P') value="P">P</option>
        </select>
      </div>
      <div class="form-group">
        <label for="usia">Usia</label>
        <input type="number" name="usia" id="usia" class="form-control" value="{{ $remajax->usia }}">
      </div>
      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" value="{{ $remajax->bb }}">
      </div>
      <div class="form-group">
        <label for="bb">Tinggi Badan</label>
        <input type="number" name="tb" id="tb" class="form-control" value="{{ $remajax->tb }}">
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="text" name="tensi" id="tensi" class="form-control" value="{{ $remajax->tensi }}">
      </div>
      <div class="form-group">
        <label for="bb">Lingkar Lengan</label>
        <input type="number" name="lila" id="lila" class="form-control" value="{{ $remajax->lila }}">
      </div>
      <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
  </div>
</div>
@endsection
