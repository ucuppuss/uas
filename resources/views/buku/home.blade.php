@extends('layout.app')
@section('body')
  <br>
  <a href="/buku/create" class="btn btn-info">Add New</a>
  <div class="col-lg-8 col-lg-offset-2">
    <center><h1>Daftar Buku</h1></center>
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
    @foreach ($buku as $key)
      <tr>
      <td>{{$key->idbuku}}</td>
      <td>{{$key->judulbuku}}</td>
      <td>{{$key->penulis}}</td>
      <td>{{$key->penerbit}}</td>
      <td>{{$key->tahun}}</td>
      <td><a href="{{'/buku/'.$key->id.'/edit/'}}">Edit</a></td>
      <td><form class="" action="/buku/{{$key->id}}" method="post">
      <input type="hidden" name="_method" value="delete">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="submit" class='btn btn-default' name="name" value="Delete"></form></td>
    </tr>
    @endforeach
  <tbody>
  <table>
</div>
@endsection
