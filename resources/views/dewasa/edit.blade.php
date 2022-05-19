@extends('layouts.dashboard.app')

@section('title', 'Edit Dewasa')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">Ubah Dewasa</div>
    <form action="{{ route('lansia.update', $dewasax->id) }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $dewasax->name }}">
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option @selected($dewasax->jk == 'L') value="L">L</option>
          <option @selected($dewasax->jk == 'P') value="P">P</option>
        </select>
      </div>
      <div class="form-group">
        <label for="usia">Usia</label>
        <input type="number" name="usia" id="usia" class="form-control" value="{{ $dewasax->usia }}">
      </div>
      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" value="{{ $dewasax->bb }}">
      </div>
      <div class="form-group">
        <label for="bb">Tinggi Badan</label>
        <input type="number" name="tb" id="bb" class="form-control" value="{{ $dewasax->tb }}">
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="text" name="tensi" id="tensi" class="form-control" value="{{ $dewasax->tensi }}">
      </div>
      <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
  </div>
</div>
@endsection
