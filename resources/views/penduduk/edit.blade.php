
@extends('layouts.app')

@push('css')
    
@endpush

@section('title','Edit Data Penduduk')  
@section('content')

<div class="main-content container-fluid">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h2>Edit Data Penduduk</h2>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Edit</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                        <form class="form form-horizontal" action="/penduduk/{{$item->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nama">Nama</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="nama" id="nama" value="{{$item->nama}}" placeholder="First Name">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="radio" name="jenis_kelamin" id="Laki-Laki" value="Laki-Laki" <?php if($item->jenis_kelamin == 'Laki-Laki'){echo "checked";} ?>>
                                        <label for="Laki-Laki">Laki-Laki</label> &nbsp; &nbsp;
                                        <input type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan" <?php if($item->jenis_kelamin == 'Perempuan'){echo "checked";} ?>>
                                        <label for="Perempuan">Perempuan</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tempat_Lahir">Tempat Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{$item->tempat_lahir}}" placeholder="Tempat Lahir">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{$item->tanggal_lahir}}" placeholder="Tanggal Lahir">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Pekerjaan">Pekerjaan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{$item->pekerjaan}}" placeholder="Pekerjaan">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="penghasilan">Penghasilan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="penghasilan" id="penghasilan" value="{{$item->penghasilan}}" placeholder="Penghasilan">
                                    </div>

                                    <div class="col-md-12">
                                        <h5>Alamat</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="kota">Kota</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="kota" id="kota" value="{{$item->kota}}" placeholder="Kota">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Kecamatan">Kecamatan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-select" id="basicSelect" name="kecamatan">
                                            @foreach($kecamatan as $item_c)
                                                <option value="{{$item_c->nama_kecamatan}}">{{$item_c->nama_kecamatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="kelurahan">kelurahan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-select" id="basicSelect" name="kelurahan">
                                            @foreach($kelurahan as $item_l)
                                                <option value="{{$item_l->nama_lurah}}">{{$item_l->nama_lurah}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rw">Rw</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-select" id="basicSelect" name="rw">
                                            @foreach($rw as $item_rw)
                                                <option value="{{$item_rw->nama_rw}}">{{$item_rw->nama_rw}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rt">Rt</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-select" id="basicSelect" name="rt">
                                            @foreach($rt as $item_rt)
                                                <option value="{{$item_rt->nama_rt}}">{{$item_rt->nama_rt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="alamat">Nama Jalan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                       <input type="text" name="alamat" id="alamat" value="{{$item->alamat}}" class="form-control" placeholder="Nama Jalan">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="no_rumah">No.Rumah</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                       <input type="text" name="no_rumah" id="no_rumah" value="{{$item->no_rumah}}" class="form-control" placeholder="No.Rumah">
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                    </div>
                                
                                </div>
                            </div>
                        </form>
            </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('js')
    
@endpush