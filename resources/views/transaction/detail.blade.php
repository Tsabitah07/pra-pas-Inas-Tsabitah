@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4 m-3">
        <div class="card p-3 border-3">
            <div class="card-body text-center">
                <h3 class="card-title mb-4">Detail Transactions</h3>
                <h5>Customer Name : {{$transaction->customerName}}</h5>
                <h5>Product : {{$transaction->product}}</h5>
                <h5>Quantity : {{$transaction->quantity}}</h5>
                <h5>Total Price : Rp{{$transaction->totalPrice}}</h5>
                <h5>Transaction Date : {{$transaction->transactionDate}}</h5>
                <a type="button" class="btn btn-secondary mt-3" href="/transaction/all">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection