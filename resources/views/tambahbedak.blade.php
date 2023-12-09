@extends('masterbedak')
@section('judulhalaman', 'Data Bedak')

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
	<h3>Data Bedak</h3>

	<a href="/bedak"> Kembali</a>

	<br/>
	<br/>

	<form action="/bedak/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkbedak" class="col-xs-4 col-form-label mr-2">Merk Bedak</label>
            <div class="col-xs-8">
                <input type="text" required="required" class="form-control" id="merkbedak" name="merkbedak">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockbedak" class="col-xs-4 col-form-label mr-2">Stock Bedak</label>
            <div class="col-xs-8">
                <input type="number" required="required" class="form-control" id="stockbedak" name="stockbedak">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-xs-4 col-form-label mr-2">Tersedia</label>
            <div class="col-xs-8">
                <input type="char" required="required" class="form-control" id="tersedia" name="tersedia">
            </div>
            {{-- Membuat form 'Tersedia' karena saya mengambil asumsi sebagai berikut :
            1. Barang tersebut ada stocknya namun sedang dalam proses pengiriman.
            2. Barang tersebut ada stocknya namun sedang dalam proses perbaikan.
            3. Barang tersebut ada stocknya namun sedang dalam proses ditarik dari pasaran karena adanya recall.
            sehingga bisa mencapai kondisi dimana stocknya ada namun pada kolom 'Tersedia' berisi 'N' --}}

        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
