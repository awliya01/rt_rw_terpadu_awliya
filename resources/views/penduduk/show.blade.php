@extends('layouts.app')

@section('title','Data Lengkap')

@section('content')
    <div class="main-content container-fluid">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h2>Data Lengkap {{$item->nama}}</h2>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h6>NIK</h6>
                            </div>
                            <div class="col-md-8">
                                <h6>: {{$item->nik}}</h6>
                            </div>
                            <div class="col-md-4">
                                <h6>Nama</h6>
                            </div>
                            <div class="col-md-8">
                                <h6>: {{$item->nama}}</h6>
                            </div>
                            <div class="col-md-4">
                                <h6>Jenis Kelamin</h6>
                            </div>
                            <div class="col-md-8">
                                <h6>: {{$item->jenis_kelamin}}</h6>
                            </div>
                            <div class="col-md-4">
                                <h6>Tempat, Tanggal Lahir</h6>
                            </div>
                            <div class="col-md-8">
                                <h6>: {{$item->tempat_lahir}}, {{$item->tanggal_lahir}}</h6>
                            </div>
                            <div class="col-md-4">
                                <h6>Pekerjaan</h6>
                            </div>
                            <div class="col-md-8">
                                <h6>: {{$item->pekerjaan}}</h6>
                            </div>
                            <div class="col-md-4">
                                <h6>Penghasilan</h6>
                            </div>
                            <div class="col-md-8">
                                <h6>: {{$item->penghasilan}}</h6>
                            </div>
                            <div class="col-md-4">
                                <h6>Alamat</h6>
                            </div>
                            <div class="col-md-8">
                                <h6>: {{$item->alamat}} No.{{$item->no_rumah}} Rt.{{$item->rt}} Rw.{{$item->rw}} Kel.{{$item->kelurahan}} Kec.{{$item->kecamatan}} Kota {{$item->kota}}</h6>
                            </div>
                            <div class="col-md-12">
                                <a href="/penduduk/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                                <a href="/penduduk" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection