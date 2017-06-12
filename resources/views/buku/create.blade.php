@extends('layout.app')
@section('body')

  <br>
  <a class="btn btn-info" href="/buku">Back</a>
  <div class="col-lg-6 col-lg-offset-3">
    <center><h1>{{substr(Route::currentRouteName(),5)}} New Item</h1></center>
  <form class="form-horizontal" action="/buku/@yield('editId')" method="post">
    {{csrf_field()}}
    @section('editMethod')
    @show
  <fieldset>
    <div class="form-group">

      <div class="col-lg-8 col-lg-offset-2">
        <input type="text" class="form-control" name="idbuku" placeholder="idbuku" value="@yield('idbuku')"> <br>
        <input type="text" class="form-control" name="judulbuku" placeholder="judulbuku" value="@yield('judulbuku')"><br>
        <input type="text" class="form-control" name="penulis" placeholder="penulis" value="@yield('penulis')"><br>
        <input type="text" class="form-control" name="penerbit" placeholder="penerbit" value="@yield('penerbit')"><br>
        <input type="text" class="form-control" name="tahun" placeholder="tahun" value="@yield('tahun')"><br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>


@endsection
