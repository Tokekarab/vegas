<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class pkncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = mahasiswa::all();
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $nim=$request-> input('nim');
        
   $nama=$request-> input('nama');
        
   $alamat=$request-> input('alamat');
        
   $jurusan=$request-> input('jurusan');

   $jenis_kelamin=$request->input('jenis_kelamin');

        $foto=$request->file('foto');
        $foto = $foto->getClientOriginalName();
        $request->foto->storeAs('public/upload',$foto);
     
        $mahasiswa = new mahasiswa;
        $mahasiswa ->nim = $nim;
        $mahasiswa ->nama = $nama;
        $mahasiswa ->alamat = $alamat;
        $mahasiswa ->jurusan= $jurusan;
        $mahasiswa ->jenis_kelamin= $jenis_kelamin;
        $mahasiswa ->foto =$foto;
        $mahasiswa->save();
        return back(); 
        
     
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $mahasiswa = \DB::table('mahasiswas')->select('nim')->where('nim',$request->input('nim'));
        $foto=$request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/upload',$foto);


        $mahasiswa->update( ['foto'=> $foto]);            
        $mahasiswa->update( ['nama'=>$request->input('nama')]);
        $mahasiswa->update( ['alamat'=>$request->input('alamat')]);
        $mahasiswa->update( ['jurusan'=>$request->input('jurusan')]);
        $mahasiswa->update( ['jenis_kelamin'=>$request->input('jurusan')]);


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
         $mahasiswa = \DB::table('mahasiswas')->select('nim')->where('nim',$request->input('nim'));
         $mahasiswa->delete();
       return back();
    }
}
