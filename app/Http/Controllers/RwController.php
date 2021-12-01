<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rw;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Rw::all();
        return view('rw.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rw.create');
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
            'nama_rw'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $table = [
            'nama_rw'=>$request->nama_rw,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Rw::create($table);
        return redirect('/rw');

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
        $table = Rw::find($id);

        return view('rw.edit',compact('table'));
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
            'nama_rw'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $table = [
            'nama_rw'=>$request->nama_rw,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Rw::find($id)->update($table);
        return redirect('/rw');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rw::destroy($id);
        return redirect('/rw');
    }
}
