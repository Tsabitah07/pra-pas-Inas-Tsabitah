@extends('layouts.main')

@section('container')

  <h1 class="m-5">Ini Data Transaction</h1>

  <div class="m-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Product</th>
          <th scope="col">Total Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($transactions as $transaction)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$transaction["customerName"]}}</td>
            <td>{{$transaction["product"]}}</td>
            <td>{{$transaction["totalPrice"]}}</td>
            <td>
              <a type="button" class="btn btn-primary" href="/transaction/detail/{{ $transaction->id }}">Detail</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection