<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // public function dashboard()
    // {
    //     return view('frontend.dashboard');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::all();
        return view('backend.grade.index', [
            'nilai' => $nilai,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.grade.create', [
            'title' => 'Tambah Nilai'        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'mahasiswa_id' => 'required',
            'mk' => 'required|max:255',
            'nilai' => 'required|max:255',
        ]);

        Nilai::create($validateData);
        return redirect('/nilai')->with('success', 'Berhasil menambahkan data nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::find($id);
        return view('backend.grade.edit', [
            'title' => 'Edit Nilai',
            'nilai' => $nilai,
        ]);
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
        $validateData = $request->validate([
            'mahasiswa_id' => 'required',
            'mk' => 'required|max:255',
            'nilai' => 'required|max:255',    
            
        ]);

        $nilai = Nilai::find($id);
        $nilai->update($validateData);
        return redirect('/nilai')->with('success', 'Nilai Berhasi Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        return redirect()->back();
    }
}
