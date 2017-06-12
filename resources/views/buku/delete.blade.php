@extends('layout.app')
@section('body')
  <br>
      <center><h1>Anda Yakin Akan Menghapus Buku Ini?</h1></center>
  <table class="table table-striped table-hover ">
    <thead>
    <tr>
      <th>ID Buku</th>
      <th>Judul Buku</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tahun</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
      <tr>
      <td>{{$key->idbuku}}</td>
      <td>{{$key->judulbuku}}</td>
      <td>{{$key->penulis}}</td>
      <td>{{$key->penerbit}}</td>
      <td>{{$key->tahun}}</td>
    </tr>
  <tbody>
  <table>
</div>
@endsection
