@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

<style>
    .form-control {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}

	textarea {
		resize: horizo;
	}
</style>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<div class="container">

        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </div>
        </form>

        </div>

	@endforeach

@endsection
