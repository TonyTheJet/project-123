@extends('layouts.app')
@section('content')
    <div class="container margin-top-md">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Submit Product</div>

                    <div class="panel-body">
                        <form action="{{ url('/account/seller/products/submit') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for=""
                                <select class="form-control">

                                </select>
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection