<?php

namespace App\Http\Controllers;

use App\Siswa;
use PDF;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index', [
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $this->validate(request(),[
            'nis' => 'required|unique:siswas,nis|max:8',
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ], [
            'nis.unique' => 'Nis sudah terdaftar!'
        ]);
        Siswa::create($attr);
        Alert::success('Informasi Pesan', 'Murid baru berhasil Mendaftar');
        return redirect()->route('admin.siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf($id)
    {
        $siswa = Siswa::findOrFail($id);
        $pdf = PDF::loadview('siswa.pdf_siswa', ['siswa' => $siswa]);
    	return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
        $attr = $this->validate(request(),[
            'nis' => 'required|max:8|unique:siswas,nis,'.$id,
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ], [
            'nis.unique' => 'Nis sudah terdaftar!'
        ]);
        Siswa::findOrFail($id)->update($attr);
        Alert::success('Informasi Pesan', 'Murid berhasil di ubah');
        return redirect()->route('admin.siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();
        Alert::success('Informasi Pesan', 'Data dihapus!');
        return back();
    }
}
