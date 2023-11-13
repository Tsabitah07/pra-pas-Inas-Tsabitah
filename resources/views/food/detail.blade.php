@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4 m-5">
        <div class="card p-3 border-3">
            <div class="card-body text-center">
                <h3 class="card-title">Detail Makanan</h3>
                <h5>Brand : {{$foods->brand}}</h5>
                <h5>Nama Makanan : {{$foods->foodName}}</h5>
                <h5>Type : {{$foods->type}}</h5>
                <h5>Expired Date : {{$foods->expiredDate}}</h5>
                <h5>Price : Rp{{$foods->price}}</h5>
                <a type="button" class="btn btn-secondary mt-3" href="/food/all">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection