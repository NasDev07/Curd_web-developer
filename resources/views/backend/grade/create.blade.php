@extends('frontend.dashboard')

@section('content')
    <div class="content">
        <div class="card card-info my-5">
            <div class="card-header">
                <h3 class="card-title">Tambah Nilai</h3>
            </div>
            <form action="{{ url('/nilai/store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group mt-2">
                        <label for="mahasiswa_id">NO</label>
                        <input type="number" name="mahasiswa_id" class="form-control" id="mahasiswa_id"
                            placeholder="Masukkan Nomor" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="mk">Mata Kuliah</label>
                        <input type="text" name="mk" class="form-control" id="mk"
                            placeholder="nama mata kuliah" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="nilai">Masukkan Nilai</label>
                        <select class="form-control" name="nilai" id="" class="custom-select rounded-0">
                            <option selected="">-- Pilih --</option>
                            <option value="85">85</option>
                            <option value="75">75</option>
                            <option value="65">65</option>
                            <option value="50">50</option>
                        </select>
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
