@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Silahkan isi data anda</h1>
  </div>

  <div class="table-responsive">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Masukan data baru Anda</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Nama Aktivitas</th>
          <th scope="col">Tanggal Aktivitas</th>
          <th scope="col">Tempat Aktivitas</th>
          <th scope="col">Penanggung Jawab</th>
          <th scope="col">Biaya Aktivitas</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($aktivitas as $aktivitas)
        <tr>
          <td>{{ $aktivitas->nama_aktivitas }}</td>
          <td>{{ $aktivitas->tgl }}</td>
          <td>{{ $aktivitas->tempat }}</td>
          <td>{{ $aktivitas->pj }}</td>
          <td>{{ $aktivitas->biaya }}</td>
          <td>
              <a href="/dashboard/aktivitas/{{ $aktivitas->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/posts/{{ $aktivitas->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x"></span></button>
              </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @endsection
