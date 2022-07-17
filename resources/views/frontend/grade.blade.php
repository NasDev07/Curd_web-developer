@extends('frontend.dashboard')

@section('content')
    <div class="col-12 my-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Penilaian Mahasiswa</h3>
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
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($mahasiswa as $item)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>
                                    @foreach ($item->nilai as $mhs)
                                        {{ $mhs->mk }} <sub><i class="right fas fa-angle-right"></i></sub>                                        
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->nilai as $mhs)
                                        {{ $mhs->nilai }} <sub><i class="right fas fa-angle-right"></i></sub>                                        
                                    @endforeach
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
