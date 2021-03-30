@extends('layouts.app')
@section('pageTitle','Daftar Siswa Baru')
@section('title','Data Siswa')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Data Siswa</h5>                 
                </div>                
            </div>
        </div>        
        <div class="card-body">
        <a href="{{ route('admin.siswa.create') }}" class="btn btn-success"> <i class="fas fa-plus"></i> Tambah Siswa</a>
            <div class="section-title">Data Siswa</div>            
                    <div class="table-responsive">
                      <table class="table table-sm">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <!-- foreach -->
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($siswas as $siswa)
                          <tr>
                            <th>{{ $no++ . '.' }}</th>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->GenderDefinition }}</td>
                            <td>{{ $siswa->tempat_lahir }}</td>
                            <td>{{ $siswa->tgl_lahir }}</td>
                            <td>{{ $siswa->asal_sekolah }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->jurusan }}</td>                                              
                            <td>
                                <a href="{{ route('admin.siswa.pdf', $siswa->id) }}" class="btn btn-warning"><i class="fas fa-print"></i>PDF</a>
                                <a href="{{ route('admin.siswa.edit', $siswa->id) }}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
                                <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus Data?');"><i class="fas fa-trash"></i>Hapus</button>
                                </form>
                            </td>
                          </tr>    
                          @endforeach
                        <!-- endforeach -->

                        </tbody>
                      </table>
                    </div>
        </div>
    </div>
</div>
@endsection