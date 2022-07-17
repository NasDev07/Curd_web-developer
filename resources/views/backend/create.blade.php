@extends('frontend.dashboard')

@section('content')
    <div class="content">
        <div class="card card-info my-5">
            <div class="card-header">
                <h3 class="card-title">Tambah Mahasiswa</h3>
            </div>
            <form action="{{ url('/mahasiswa/store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group mt-2">
                        <label for="grade_id">No</label>
                        <input type="number" name="grade_id" class="form-control" id="grade_id"
                            placeholder="Masukkan Nomor" required>
                    </div>


                    <div class="form-group mt-2">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama"
                            placeholder="nama wajib isi" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="nim">Nim</label>
                        <input type="text" name="nim" class="form-control" id="paragrafdepan"
                            placeholder="masukan nim" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="jurusan">Program Studi</label>
                        <input type="text" name="jurusan" class="form-control" id="paragrafdepan"
                            placeholder="masukan Program Studi" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="paragrafdepan"
                            placeholder="masukan No HP" required>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
