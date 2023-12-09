@extends('masterbedak')
@section('judulhalaman', 'Data Bedak')

@section('konten')
    <h2>www.malasngoding.com</h2>
	<b><h3>Data Bedak</h3></b>
    <br>

    <h5>Tambahkan Daftar Bedak Baru</h5>
	<a href="/bedak/tambah" class="btn btn-primary"> + Tambah Bedak Baru</a>
    <br>
    <br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Bedak</th>
			<th>Merk bedak</th>
			<th>Stock bedak</th>
			<th>Tersedia</th>
            <th>Action</th>
		</tr>
		@foreach($bedak as $b)
		<tr>
			<td>{{ $b->kodebedak }}</td>
			<td>{{ $b->merkbedak }}</td>
			<td>{{ $b->stockbedak }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
				<a href="/bedak/edit/{{ $b->kodebedak }}" class="btn btn-warning">Edit</a>
				<a href="/bedak/hapus/{{ $b->kodebedak }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $bedak->links() }}


@endsection
