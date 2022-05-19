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
        <input type="text" name="name" id="name" class="form-control">
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
        <input type="number" name="usia" id="usia" class="form-control">
      </div>
      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control">
      </div>
      <div class="form-group">
        <label for="tb">Tinggi Badan</label>
        <input type="text" name="tb" id="tb" class="form-control">
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
        <input type="text" name="tensi" id="tensi" class="form-control">
      </div>
      <div class="form-group">
        <label for="lila">Lingkar Lengan</label>
        <input type="text" name="lila" id="lila" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
@endsection
