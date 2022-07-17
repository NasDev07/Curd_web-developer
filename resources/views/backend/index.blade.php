
@extends('frontend.dashboard')

@section('content')
    <div class="col-12 my-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>

                <div class="card-tools">
                    <a href="/mahasiswa/create" type="button" class="btn btn-success">Tambah + </a>                   
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr class="bg-primary">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Program Studi</th>
                            <th>No Hp</th>                            
                            <th style="display: none">Grade</th>                            
                            <th>Opsi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($mahasiswa as $mahasiswa)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->jurusan }}</td>
                                <td>{{ $mahasiswa->no_hp }}</td>
                                <td style="display: none">{{ $mahasiswa->grade_id }}</td>
                                <td>
                                    <a href="/mahasiswa/{{ $mahasiswa->id }}/delete" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Yakin Dihapus? {{ $mahasiswa->nama }}');">Hapus</a>
                                    <a href="/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
