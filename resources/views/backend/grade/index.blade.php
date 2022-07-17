
@extends('frontend.dashboard')

@section('content')
    <div class="col-12 my-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Nilai</h3>

                <div class="card-tools">
                    <a href="/nilai/create" type="button" class="btn btn-success">Tambah + </a>                    
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr class="bg-primary">
                            <th>No.</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                            <th style="display: none">Grade</th>     
                            <th>Opsi</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($nilai as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->mk }}</td>
                                <td>{{ $row->nilai }}</td>
                                <td style="display: none">{{ $row->grade_id }}</td>
                                <td>
                                    <a href="/nilai/{{ $row->id }}/delete" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Yakin Dihapus? {{ $row->nama }}');">Hapus</a>
                                    <a href="/nilai/{{ $row->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
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
