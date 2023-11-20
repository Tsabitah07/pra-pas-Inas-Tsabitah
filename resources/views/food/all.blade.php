@extends('layouts.main')

@section('container')

  <h1 class="m-5">Ini Data Makanan</h1>

  <div class="m-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Food Name</th>
          <th scope="col">Type</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($food as $foods)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$foods["foodName"]}}</td>
            <td>{{$foods["type"]}}</td>
            <td>{{$foods["price"]}}</td>
            <td>
              <a type="button" class="btn btn-primary" href="/food/detail/{{ $foods->id }}">Detail</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection