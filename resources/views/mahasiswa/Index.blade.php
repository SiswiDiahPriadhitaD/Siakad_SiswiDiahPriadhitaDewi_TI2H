@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>
<form class="form float-left" method="get" action="/search">
    <div class="form-group">
        {{-- <label for="search" class="d-block mr-2">Cari</label> --}}
        <input type="text" name="search" class="form-control w-75 d-inline" value="{{ old('search') }}" id="search" placeholder="Kata Kunci">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
  </form>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div> @endif
@if ($message = Session::get('error'))
<div class="alert alert-error">
    <p>{{ $message }}</p>
</div> @endif

<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Profile</th>
        <th width="280px">Action</th>
    </tr>
    
    @foreach ($paginate as $mhs)
    <tr>
    
    <td>{{ $mhs ->nim }}</td>
    <td>{{ $mhs ->nama }}</td>
    <td>{{ $mhs ->kelas->nama_kelas }}</td>
    <td>{{ $mhs ->jurusan }}</td>
    <td>{{ $mhs ->email }}</td>
    <td>{{ $mhs ->alamat}}</td>
    <td>{{ $mhs ->tanggallahir }}</td>
    <td><img style="width: 80px; height: 80px; overflow: hidden" class="rounded-circle" src="{{ asset('./storage/'. $mhs->foto) }}" alt=""></td>
    <td>
        <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
            
        <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a> @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-danger">Delete</button>
        <a class="btn btn-success" href="/mahasiswa/nilai/{{ $mhs->nim }}">Nilai</a>
    </form>
</td>
</tr> @endforeach
</table>
{!! $paginate->links() !!}
 @endsection