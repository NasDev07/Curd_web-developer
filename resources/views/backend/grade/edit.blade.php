@extends('frontend.dashboard')

@section('content')
    <div class="content">
        <div class="card card-info my-5">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
            </div>
            <form action="/nilai/{{ $nilai->id }}/update" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="mahasiswa_id">No.</label>
                        <input type="number" name="mahasiswa_id" class="form-control" id="mahasiswa_id"
                            value="{{ $nilai->mahasiswa_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="mk">Mata Kuliah</label>
                        <input type="text" name="mk" class="form-control" id="mk"
                            value="{{ $nilai->mk }}">
                    </div>

                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                            <select class="form-control" name="nilai" id="" class="custom-select rounded-0">
                                <option selected="">-- Pilih --</option>
                                <option value="85" @if($nilai->nilai=='85') selected @endif>85</option>
                                <option value="75" @if($nilai->nilai=='75') selected @endif>75</option>                                
                                <option value="65" @if($nilai->nilai=='65') selected @endif>65</option>                                
                                <option value="50" @if($nilai->nilai=='50') selected @endif>50</option>                                
                            </select>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
