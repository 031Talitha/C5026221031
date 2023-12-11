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
                <td>
                    @php
                        $words = explode(' ', $c->pesan);
                    @endphp

                    @foreach($words as $word)
                        @switch($word)
                            @case(':))')
                                <img src="{{ asset('1.png') }}" alt="Emoticon 1">
                                @break
                            @case(':3')
                                <img src="{{ asset('2.png') }}" alt="Emoticon 2">
                                @break
                            @case(':P')
                                <img src="{{ asset('3.png') }}" alt="Emoticon 3">
                                @break
                            @case(':C')
                                <img src="{{ asset('4.png') }}" alt="Emoticon 4">
                                @break
                            @case(';)')
                                <img src="{{ asset('5.png') }}" alt="Emoticon 5">
                                @break
                            @default
                                {{ $word }}
                        @endswitch
                    @endforeach
                </td>
            </tr>
        @endforeach
	</table>

@endsection
