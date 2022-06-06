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
        <input type="text" name="name" id="name" class="form-control" value="{{ $balitum->name }}">
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
        <input type="number" name="usia" id="usia" class="form-control" value="{{ $balitum->usia }}">
      </div>
      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control" value="{{ $balitum->bb }}">
      </div>
      <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
  </div>
</div>
@endsection