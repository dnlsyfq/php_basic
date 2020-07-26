@extends('layout.main')

@section('title','Form Tambah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
                <form method="post" action="/students/create">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" id="nrp" placeholder="Example input placeholder" name="nrp">
                    </div>


                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" id="nrp" placeholder="Example input placeholder" name="nrp">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
