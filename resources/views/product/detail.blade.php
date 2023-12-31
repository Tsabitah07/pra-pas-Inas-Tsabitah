@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4 m-3">
        <div class="card p-3 border-3">
            <div class="card-body text-center">
                <h3 class="card-title">Detail Product</h3>
                <img src="{{$product->image}}" alt="Foto Product" style="width: 200px">
                <h5>Brand : {{$product->brand}}</h5>
                <h5>Product Name: {{$product->productName}}</h5>
                <h5>Category : {{$product->category}}</h5>
                <h5>Production Date : {{$product->productionDate}}</h5>
                <h5>Price : Rp{{$product->price}}</h5>
                <a type="button" class="btn btn-secondary mt-3" href="/product/all">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection