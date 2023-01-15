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
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $post->nim }}</td>
          <td>{{ $post->nama }}</td>
          <td>{{ $post->jurusan }}</td>
          <td>{{ $post->tgllahir }}</td>
          <td>{{ $post->jk }}</td>
          <td>
            <form action="/dashboard/posts" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x"></span></button>
            </form>
            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @endsection
