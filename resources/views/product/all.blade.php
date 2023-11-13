@extends('layouts.main')

@section('container')

  <h1 class="m-5">Ini Data Product</h1>

  <div class="m-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Product</th>
          <th scope="col">Kategori</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($products as $product)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$product["productName"]}}</td>
            <td>{{$product["category"]}}</td>
            <td>{{$product["price"]}}</td>
            <td>
              <a type="button" class="btn btn-primary" href="/product/detail/{{ $product->id }}">Detail</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection