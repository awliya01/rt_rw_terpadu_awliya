<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelurahan;
class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Kelurahan::all();
        return view('kelurahan.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelurahan.create');
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
            'nama_kelurahan'=>'required',
            'nama_lurah'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $table = [
            'nama_kelurahan'=>$request->nama_kelurahan,
            'nama_lurah'=>$request->nama_lurah,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Kelurahan::create($table);
        return redirect('/kelurahan');
        
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
        $table = Kelurahan::find($id);

        return view('kelurahan.edit',compact('table'));
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
            'nama_kelurahan'=>'required',
            'nama_lurah'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $table = [
            'nama_kelurahan'=>$request->nama_kelurahan,
            'nama_lurah'=>$request->nama_lurah,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Kelurahan::find($id)->update($table);
        return redirect('/kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelurahan::destroy($id);
        return back();
    }
}
