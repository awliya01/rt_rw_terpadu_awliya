<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Kecamatan::all();
        return view('kecamatan.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kecamatan'=>'required',
            'nama_camat'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $table = [
            'nama_kecamatan'=>$request->nama_kecamatan,
            'nama_camat'=>$request->nama_camat,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Kecamatan::create($table);
        return redirect('/kecamatan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = Kecamatan::find($id);

        return view('kecamatan.edit',compact('table'));
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
        $this->validate($request,[
            'nama_kecamatan'=>'required',
            'nama_camat'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $table = [
            'nama_kecamatan'=>$request->nama_kecamatan,
            'nama_lurah'=>$request->nama_camat,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Kecamatan::find($id)->update($table);
        return redirect('/kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kecamatan::destroy($id);
        return back();
    }
}
