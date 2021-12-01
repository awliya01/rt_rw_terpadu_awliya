<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\DataPenduduk;
use App\Kecamatan;
use App\Kelurahan;
use App\Rw;
use App\Rt;

class DataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = DataPenduduk::all();
        return view('penduduk.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = DataPenduduk::find($id);
        return view('penduduk.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DataPenduduk::find($id);
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $rw = Rw::all();
        $rt = Rt::all();
        return view('penduduk.edit',compact('item','kecamatan','kelurahan','rw','rt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fill = [
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'pekerjaan'=>$request->pekerjaan,
            'penghasilan'=>$request->penghasilan,
            'kota'=>$request->kota,
            'kecamatan'=>$request->kecamatan,
            'kelurahan'=>$request->kelurahan,
            'rt'=>$request->rt,
            'rw'=>$request->rw,
            'alamat'=>$request->alamat,
            'no_rumah'=>$request->no_rumah,
        ];

        DataPenduduk::find($id)->update($fill);

        // return redirect()->route('penduduk.show',$id);
        return redirect("/penduduk/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
