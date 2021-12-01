
@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
@endpush

@section('content')

<div class="main-content container-fluid">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h2>Data Penduduk</h2>
    </div>
    <section class="section">
        <div class="card">
            {{-- <h1 align="center">Data penduduk</h1> --}}
            <div class="card-body">
                <table align="center" class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Pekerjaan</th>
                            <th>Penghasilan</th>
                            <th>Aksi</th>          
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($table as $item)
                        <tr>
                            
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->pekerjaan}}</td>
                            <td>{{$item->penghasilan}}</td>
                            <td>
                                <form action="/penduduk/{{$item->id}}" method="post">
                                    <a href="/penduduk/{{$item->id}}" class="btn btn-primary">show</a>
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                        
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('js')
    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/js/vendors.js')}}"></script>
@endpush