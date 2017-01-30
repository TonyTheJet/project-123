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
                                <label for="type_id" class="control-label col-xs-12 col-sm-6 col-md-4">Product Type: </label>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <select class="form-control" name="type_id">
                                        <option>Select Product Type</option>
                                        @foreach ($product_types as $type)
                                            <option value="{{ $type->id }}" data-notes="{{ $type->notes }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('type_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-offset-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection