@extends('master')

@section('judulhalaman','Kontak')

@section('judul')
<div class="jumbotron">
    Ini Halaman Kontak
</div>
@endsection

@section('konten')
<table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      @for ($i=1;$i<6;$i++)
      <tr>
        <td>No</td>
        <td>:</td>
        <td>{{ $i }}</td>
      </tr>
      @endfor
    </tbody>
  </table>
@endsection
