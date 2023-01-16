@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Silahkan edit data anda</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/aktivitas/{{ $aktivitas->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nim" class="form-label">Nama Aktivitas</label>
          <input type="text" name="nama-aktivitas" class="form-control @error('nama-aktivitas') is-invalid @enderror" id="nama-aktivitas" required autofocus value="{{ old('nim', $post->nim) }}">
        <div class="mb-3">
          <label for="tgl" class="form-label">Tanggal Aktivitas</label>
          <input type="date" name="tgl" class="form-control @error('tgl') is-invalid @enderror" id="tgl" value="{{ old('tgl', $aktivitas->nama) }}">
        </div>
        <div class="mb-3">
          <label for="tempat" class="form-label">Tempat Aktivitas</label>
          <input type="text" name="tempat" class="form-control" id="tempat" value="{{ old('tempat', $aktivitas->tempat) }}">
        </div>
        <div class="mb-3">
          <label for="tgllahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="tgllahir @error('tgllahir') is-invalid @enderror" name="tgllahir" class="form-control" id="tgllahir" value="{{ old('tgllahir', $post->tgllahir) }}">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <input type="radio" name="jk" value="Laki-laki" class="mx-1" id="jk" {{ $post->jk == 'Laki-laki' ? 'checked="true"' : '' }}> Laki-Laki
                    <input type="radio" name="jk" value="Perempuan" class="mx-1" id="jk" {{ $post->jk == 'Perempuan' ? 'checked="true"' : '' }}> Perempuan
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-3" value="save">Submit</button>
      </form>
</div>

@endsection
