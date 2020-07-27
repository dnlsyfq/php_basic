@extends('layout.main')

@section('title','Form Tambah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
                <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" >
                        @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp">
                        @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif


                </form>
            </div>
        </div>
    </div>
@endsection
