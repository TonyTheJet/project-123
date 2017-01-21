@extends('layouts.app')

@section('content')
<div class="container margin-top-md">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ul class="links">
                        @if (Auth::user()['attributes']['is_admin'])
                            <li><a href="{{ url('/admin') }}" class="btn btn-primary">ADMIN DASHBOARD</a></li>
                        @endif;
                        @if (Auth::user()['attributes']['is_seller'])
                            <li><a href="{{ url('/account/seller') }}" class="btn btn-primary">SELLER DASHBOARD</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
