<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dashboard(){
        return view('frontend.dashboard');
    }

    public function grade(){
        $mahasiswa = Mahasiswa::all();
        return view('frontend.grade', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('backend.index', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create', [
            'title' => 'Tambah Mahasiswa'        
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
            'grade_id' => 'required',
            'nama' => 'required|max:255',
            'nim' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'no_hp' => 'required|max:255',
        ]);

        Mahasiswa::create($validateData);
        return redirect('/mahasiswa')->with('success', 'Berhasil menambahkan data mahasiswa');
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
        $mahasiswa = Mahasiswa::find($id);
        return view('backend.edit', [
            'title' => 'Edit Mahasiswa',
            'mahasiswa' => $mahasiswa,
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
            'grade_id' => 'required',
            'nama' => 'required|max:255',
            'nim' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'no_hp' => 'required|max:255',
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($validateData);
        return redirect('/mahasiswa')->with('success', 'Berhasil mengubah data mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->back();
    }
    
}


