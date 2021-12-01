<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rt;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Rt::all();
        return view('rt.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rt.create');
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
            'nama_rt'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $item = [
            'nama_rt'=>$request->nama_rt,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Rt::create($item);

        return redirect('/rt');   
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
        $item = Rt::find($id);

        return view('rt.edit',compact('item'));
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
            'nama_rt'=>'required',
            'masa_jabatan'=>'required',
            'no_tlp'=>'required',
            'email'=>'required'
        ]);
        $item = [
            'nama_rt'=>$request->nama_rt,
            'masa_jabatan'=>$request->masa_jabatan,
            'no_tlp'=>$request->no_tlp,
            'email'=>$request->email
        ];
        Rt::find($id)->update($item);
        return redirect('/rt');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Rt::find($id)->delete();
        Rt::destroy($id);
        return redirect('/rt');
    }
}
