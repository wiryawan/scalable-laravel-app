@extends("template.index")

@section("content")
<form method="POST" action="/pelanggan/{{ $pelanggan->id }}">
    @csrf
    @method("PATCH")
    ID : {{ $pelanggan->id }}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Pelanggan</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" value="{{ $pelanggan->nama }}" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Pelanggan">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kelamin">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelamin" value="L">
                    <label class="form-check-label">Laki laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelamin" value="P" checked="">
                    <label class="form-check-label">Wanita</label>
                </div>
            </div>
            <div class="form-group">
                <label for="province_id">Provinsi</label>
                <select class="form-control" name="province_id">
                    @foreach($provinces as $province)
                    <option "{{ $pelanggan->provice_id == $province->id ? "selected" : "" }}" value="{{ $province->id }}">{{ $province->province_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="phone">No Telepon</label>
                <input type="text" value="{{ $pelanggan->phone }}" name="phone" class="form-control" id="phone" placeholder="Masukan No Telepon Pelanggan">
            </div>
            <div class="form-group">
                <label for="phone">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat Pelanggan">
                {{ $pelanggan->alamat }}
                </textarea>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection