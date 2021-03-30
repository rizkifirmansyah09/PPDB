@extends('layouts.app')
@section('pageTitle','Daftar Siswa Baru')
@section('title','Daftar Siswa Baru')
@section('content')
    <div class="container-fluid">
        <a href="{{ route('admin.siswa.index') }}" class="btn btn-danger mb-4"><i class="fas fa-arrow-left"></i>    Kembali</a>
        <div class="card">
            <div class="card-header">
                <h5>Edit Siswa</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nis">*NIS</label>
                            <input type="number" name="nis" value="{{ $siswa->nis }}" id="nis" maxlength="8" class="form-control @error('nis') is-invalid @enderror" required>
                            @error('nis')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">*Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" class="form-control @error('nama') is-invalid @enderror" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="alamat">*Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" required>{{ $siswa->alamat }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jk">*Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control custom-select" required>
                                <option value="0" @if($siswa->gender == 0) selected @endif>Laki - laki</option>
                                <option value="1" @if($siswa->gender == 1) selected @endif>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tempat_lahir">*Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tgl_lahir">*Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $siswa->tgl_lahir }}" class="form-control @error('tgl_lahir') is-invalid @enderror" required>
                            @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="asal_sekolah">*Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" value="{{ $siswa->asal_sekolah }}" class="form-control @error('asal_sekolah') is-invalid @enderror" required>
                            @error('asal_sekolah')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kelas">*Kelas</label>
                            <input type="text" name="kelas" id="kelas" value="{{ $siswa->kelas }}" class="form-control @error('kelas') is-invalid @enderror" required>
                            @error('kelas')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jurusan">*Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan" value="{{ $siswa->jurusan }}" class="form-control @error('jurusan') is-invalid @enderror" required>
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            </div>
                        </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection