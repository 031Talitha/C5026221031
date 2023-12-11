@extends('master3')
@section('judulhalaman', 'CHAT')

@section('konten')
	<h2>CHAT</h2>

	<br/>
    <p>PESAN UNTUK KAMU</p>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Pesan</th>

		</tr>
		@foreach($chat as $c)
		<tr>
			<td>{{ $c->id }}</td>
			<td>{{ $c->pesan }}</td>
		</tr>
		@endforeach
	</table>

@endsection
