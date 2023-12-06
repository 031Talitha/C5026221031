@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

<style>
    .form-horizontal {
    display: grid;
    grid-template-columns: 1fr 4fr;
    gap: 10px;
}

    .form-group {
        display: contents;
        width: 100%;
		padding: 12px 20px;
		margin: 8px 0;

}

    label {
    text-align: left;
}
</style>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-xs-4 col-form-label mr-2">Nama</label>
            <div class="col-xs-8">
                <input type="text" required="required" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-xs-4 col-form-label mr-2">Jabatan</label>
            <div class="col-xs-8">
                <input type="text" required="required" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-xs-4 col-form-label mr-2">Umur</label>
            <div class="col-xs-8">
                <input type="number" required="required" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-xs-4 col-form-label mr-2">Alamat</label>
            <div class="col-xs-8">
                <textarea required="required" class="form-control" id="alamat" name="alamat"></textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
