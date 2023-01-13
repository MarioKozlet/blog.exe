@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Silahkan masukan data</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" required autofocus>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control" id="jurusan">
        </div>
        <div class="mb-3">
          <label for="tgllahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tgllahir">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <input type="radio" name="jk" value="lakilaki" class="mx-1" id="jk"> Laki Laki
                    <input type="radio" name="jk" value="perempuan" class="mx-1" id="jk"> Perempuan
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
</div>

@endsection
