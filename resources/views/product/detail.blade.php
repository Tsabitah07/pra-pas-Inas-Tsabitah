@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4 m-5">
        <div class="card p-3 border-3">
            <div class="card-body text-center">
                <h3 class="card-title">Detail Product</h3>
                <h5>Brand : {{$product->brand}}</h5>
                <h5>Nama Product : {{$product->productName}}</h5>
                <h5>Kategori : {{$product->category}}</h5>
                <h5>Production Date : {{$product->productionDate}}</h5>
                <h5>Price : Rp{{$product->price}}</h5>
                <a type="button" class="btn btn-secondary mt-3" href="/product/all">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection