<?php
$no = 1;
?>
@extends('layouts.default')

@section('content')
<section>
        <div class="container mt-3">
            <div class="head p-3 mb-2">
                <div class="row">
                    <div class="col-2">
                        <a href="{{ url('create')}}"><button type="button" class="btn btn-primary">+ Tambah Data</button></a>
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <form class="d-flex" action="{{ route('searchEngine')}}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Masukkan Judul Buku..." name ="keyword" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-primary" type="submit" id="button-addon2">search</button>
                                    </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-3">
                        <a href="{{url('welcome')}}"><button type="button" class="keluar btn btn-outline-danger">Log Out</button></a>
                    </div>
                </div>
            </div>
            <a href="index.php">kembali</a>
            <button type="button" class="btn btn-info">Cetak </button>
            <table class="table table-hover table-bordered mt-5">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ISBN</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Cetakan </th>
                <th scope="col">Jumlah Halaman</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dataBuku)
                    <tr>
                        <td><?php 
                            echo($no);
                            $no++;
                        ?></td>
                        <td>{{$dataBuku->isbn}}</td>
                        <td>{{$dataBuku->judul_buku}}</td>
                        <td>{{$dataBuku->pengarang}}</td>
                        <td>{{$dataBuku->penerbit}}</td>
                        <td>{{$dataBuku->tahun_terbit}}</td>
                        <td>{{$dataBuku->cetakan}}</td>
                        <td>{{$dataBuku->jumlah_halaman}}</td>
                        <td></td>
                        <td>
                            <a href="{{url('show/'.$dataBuku->id)}}" class="btn btn-warning">update</a>
                            <a href="{{url('destroy/'.$dataBuku->id)}}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </section>
@endsection
