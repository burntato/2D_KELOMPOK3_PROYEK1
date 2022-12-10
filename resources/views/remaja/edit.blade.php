@extends('layouts.dashboard.app')

@section('title', 'Edit Remaja')

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title">Ubah Remaja</div>
            <form action="{{ route('remaja.update', $remaja->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" pattern="[a-zA-Z]*" value="{{ $remaja->name }}">
                    <p>Nama tidak bisa menggunakan nomor</p>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control">
                        <option @selected($remaja->jk == 'L') value="L">L</option>
                        <option @selected($remaja->jk == 'P') value="P">P</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="usia">Usia</label>
                    <select name="usia" id="usia" class="form-control">
                        {{-- 12 - 25 --}}
                        <option @selected($remaja->usia == '12') value="12">12 Tahun</option>
                        <option @selected($remaja->usia == '13') value="13">13 Tahun</option>
                        <option @selected($remaja->usia == '14') value="14">14 Tahun</option>
                        <option @selected($remaja->usia == '15') value="15">15 Tahun</option>
                        <option @selected($remaja->usia == '16') value="16">16 Tahun</option>
                        <option @selected($remaja->usia == '17') value="17">17 Tahun</option>
                        <option @selected($remaja->usia == '18') value="18">18 Tahun</option>
                        <option @selected($remaja->usia == '19') value="19">19 Tahun</option>
                        <option @selected($remaja->usia == '20') value="20">20 Tahun</option>
                        <option @selected($remaja->usia == '21') value="21">21 Tahun</option>
                        <option @selected($remaja->usia == '22') value="22">22 Tahun</option>
                        <option @selected($remaja->usia == '23') value="23">23 Tahun</option>
                        <option @selected($remaja->usia == '24') value="24">24 Tahun</option>
                        <option @selected($remaja->usia == '25') value="25">25 Tahun</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="bb">Berat Badan</label>
                    <input type="number" name="bb" id="bb" class="form-control" placeholder="Berat berdasarkan KG" value="{{ $remaja->bb }}">
                </div>
                <div class="form-group">
                    <label for="bb">Tinggi Badan</label>
                    <input type="number" name="tb" id="tb" class="form-control" placeholder="Berat berdasarkan KG" value="{{ $remaja->tb }}">
                </div>
                <div class="form-group">
                    <label for="tensi">Tensi</label>
                    <input type="text" name="tensi" id="tensi" class="form-control" value="{{ $remaja->tensi }}">
                </div>
                <div class="form-group">
                    <label for="bb">Lingkar Lengan</label>
                    <input type="number" name="lila" id="lila" class="form-control" placeholder="Diameter CM" value="{{ $remaja->lila }}">
                </div>
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </form>
        </div>
    </div>
@endsection
