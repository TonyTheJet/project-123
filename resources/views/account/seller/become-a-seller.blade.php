@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" id="main">
                <div class="panel panel-default">
                    <div class="panel-heading">Become a Seller</div>
                    <div class="panel-body">
                        <form action="{{ url('/become-a-seller') }}" method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            TODO: become a seller form here
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection