<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdb = Ppdb::latest()->paginate(1);
        return view('ppdb.pdf',compact('ppdb'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'min' => 'Minimal 11 angka!',
            'max' => 'Maksimal 13 angka!',
            'required' => 'Form Wajib Diisi!',
            'email.unique' => 'Email sudah digunakan',
            'nisn.unique' => 'NISN sudah digunakan'
        ];
        $this->validate($request,[
            'nisn' => 'required|unique:ppdb,nisn',
            'JK' => 'required|in:laki-laki,perempuan',
            'nama' => 'required',
            'sekolah' => 'required',
            'n_sekolah' => 'nullable',
            'email' => 'required|unique:ppdb,email',
            'no_hp' => 'required|min:11|max:13',
            'no_ay' => 'required|min:11|max:13',
            'no_ib' => 'required|min:11|max:13'
        ],$message);

        $ppdb = Ppdb::create([
            'nisn' => $request->nisn,
            'JK' => $request->JK,
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'n_sekolah' => $request->n_sekolah,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_ay' => $request->no_ay,
            'no_ib' => $request->no_ib
        ]);


        return redirect()->route('ppdb.index')
                            ->with('success','Silahkan Kembali ke Menu Utama');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
