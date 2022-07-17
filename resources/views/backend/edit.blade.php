@extends('frontend.dashboard')

@section('content')
    <div class="content">
        <div class="card card-info my-5">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
            </div>
            <form action="/mahasiswa/{{ $mahasiswa->id }}/update" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group mt-2">
                        <label for="grade_id">No.</label>
                        <input type="number" name="grade_id" class="form-control" id="grade_id"
                        value="{{ $mahasiswa->grade_id }}" readonly >
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama"
                            value="{{ $mahasiswa->nama }}">
                    </div>                    

                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" name="nim" class="form-control" id="nim"
                            value="{{ $mahasiswa->nim }}">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Program Studi</label>
                        <input type="text" name="jurusan" class="form-control" id="jurusan"
                            value="{{ $mahasiswa->jurusan }}">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No HP/WA</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp"
                            value="{{ $mahasiswa->no_hp }}">
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
