@extends('layouts.default')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            @csrf
                            <legend>Tambah Data Buku Baru</legend>
                            <div class="mb-3">
                                <label for="isbn" class="form-label">ISBN :</label>
                                <input type="text" id="isbn" name="isbn" class="form-control" placeholder="Masukkan ISBN" required>
                            </div>
                            <div class="mb-3">
                                <label for="judul_buku" class="form-label">Judul Buku :</label>
                                <input type="text" id="judul_buku" name="judul_buku" class="form-control" placeholder="Masukkan Judul Buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="pengarang" class="form-label">Nama Pengarang :</label>
                                <input type="text" id="pengarang" name="pengarang" class="form-control" placeholder="Masukkan Nama Pengarang" required>
                            </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Nama Penerbit :</label>
                                <input type="text" id="penerbit" name="penerbit" class="form-control" placeholder="Masukkan Nama Penerbit" required>
                            </div>
                            <div class="mb-3">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit :</label>
                                <input type="text" id="tahun_terbit" name="tahun_terbit" class="form-control" placeholder="Masukkan Tahun Terbit" required>
                            </div>
                            <div class="mb-3">
                                <label for="cetakan" class="form-label">Cetakan Buku ke :</label>
                                <input type="text" id="cetakan" name="cetakan" class="form-control" placeholder="Masukkan Cetakan Buku ke" required>
                            </div>
                           
                            <div class="mb-3">
                                <label for="jumlah_halaman" class="form-label"> Jumlah Halaman :</label>
                                <input type="text" id="jumlah_halaman" name="jumlah_halaman"  class="form-control" required placeholder="Masukkan Jumlah Halaman">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url('back')}}"><button type="button" class="btn btn-outline-secondary">Kembali</button></a>
                            <button type="reset" class="btn btn-outline-danger">Reset</button>
                        </fieldset>
                    </form>
                </div> 
            </div>
            
        </div>
    </section>
@endsection