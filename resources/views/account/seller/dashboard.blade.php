@extends('layouts.app')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h1>My Seller Dashboard</h1>
        <a href="{{ url('/account/seller/products/submit') }}" class="btn btn-primary">Submit Product</a>
    </div>
@endsection