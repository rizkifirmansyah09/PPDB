<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarSiswaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store()
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
        return back();
    }

}
