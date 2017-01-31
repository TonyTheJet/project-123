@extends('layouts.app')
@section('content')
    <div class="container margin-top-md">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Submit Product</h2></div>

                    <div class="panel-body">
                        <form action="{{ url('/account/seller/products/submit') }}" method="post" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="type_id" class="control-label col-xs-12 col-sm-6 col-md-4">Product Type:</label>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <select class="form-control" name="type_id" required>
                                        <option value="">Select Product Type</option>
                                        @foreach ($product_types as $type)
                                            <option value="{{ $type->id }}" data-notes="{{ $type->notes }}" {{ old('type_id') == $type->id ? 'selected="selected"' : '' }}>{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('type_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type_id') }}</strong>
                                        </span>
                                    @endif
                                    <p id="product-type-notes"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file" class="control-label col-xs-12 col-sm-6 col-md-4">File:</label>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <input type="file" name="file" class="form-control" accept="application/zip" required />
                                    <small>(should be a .zip archive)</small>
                                    @if ($errors->has('file'))
                                        <span class="help-block"><strong>{{ $errors->first('file') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail" class="control-label col-xs-12 col-sm-6 col-md-4">Thumbnail:</label>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <input type="file" name="thumbnail" class="form-control" accept="image/jpeg" required />
                                    <small>(should be a .jpg file; must be at least {{ $thumbnail_width }}x{{ $thumbnail_height }}, and will be cropped to a {{ $thumbnail_width }}x{{ $thumbnail_height }} square)</small>
                                    @if ($errors->has('thumbnail'))
                                        <span class="help-block"><strong>{{ $errors->first('thumbnail') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="control-label col-xs-12 col-sm-6 col-md-4">Name:</label>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required />
                                    @if ($errors->has('name'))
                                        <span class="help-block"><strong>{{ $errors->first('type_id') }}</strong></span>
                                    @endif
                                    <p><strong>URL Preview:</strong> {{ URL::to('/products/single') }}/<span id="product-slug-preview"></span></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price_credits" class="control-label col-xs-12 col-sm-6 col-md-4">Price:</label>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <input type="number" name="price_credits" min="{{ $price_min }}" max="{{ $price_max }}" step="0.01" value="{{ old('price_credits') }}" required />
                                    @if ($errors->has('price_credits'))
                                        <span class="help-block"><strong>{{ $errors->first('price_credits') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label col-xs-12 col-sm-6 col-md-4">Description:</label>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <textarea class="form-control" maxlength="{{ $description_max_length }}" minlength="{{ $description_min_length }}" name="description" required>{{ old('description') }}</textarea>
                                    <small>({{ $description_min_length }} to {{ $description_max_length }} characters)</small>
                                    @if ($errors->has('description'))
                                        <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
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