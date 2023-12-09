@extends('masterbedak')
@section('judulhalaman', 'Data Bedak')

@section('konten')

<style>
    .form-control {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}

	textarea {
		resize: horizontal;
	}
</style>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Daftar Bedak</h3>

	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

	@foreach($bedak as $b)
	<div class="container">

        <form action="/bedak/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kodebedak" value="{{ $b->kodebedak }}"> <br/>
            <div class="form-group row">
                <label for="merkbedak" class="col-sm-2 col-form-label">Merk bedak</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="merkbedak" value="{{ $b->merkbedak }}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="stockbedak" class="col-sm-2 col-form-label">Stock Bedak</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="stockbedak" value="{{ $b->stockbedak }}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                    <input type="char" required="required" name="tersedia" value="{{ $b->tersedia }}" class="form-control">
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
