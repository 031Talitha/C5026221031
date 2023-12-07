@extends('master3')
@section('judulhalaman', 'Data Keranjang Belanja')

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
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-xs-4 col-form-label mr-2">Kode Barang</label>
            <div class="col-xs-8">
                <input type="number" required="required" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-xs-4 col-form-label mr-2">Jumlah Pembelian</label>
            <div class="col-xs-8">
                <input type="number" required="required" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-xs-4 col-form-label mr-2">Harga per item</label>
            <div class="col-xs-8">
                <input type="number" required="required" class="form-control" id="Harga" name="Harga">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
