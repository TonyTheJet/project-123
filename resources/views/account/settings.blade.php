@extends('layouts.app')

@section('content')
    <div class="container margin-top-md">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Account Settings</div>

                    <div class="panel-body">
                        @if (!empty($message))
                            <div class="text-ifo">{{ $message }}</div>
                        @endif
                        <form class="form-horizontal" method="post" action="{{ url('/account/settings') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()['attributes']['name'] }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()['attributes']['email'] }}" disabled>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" minlength="6" autocomplete="new-password">
                                    <small>(leave blank to keep the same password)</small>
                                    <div id="password-text-hierarchy-text"></div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="6" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-6">
                                    <input id="phone" type="tel" minlength="6" title="Phone Number (Format: +99(99)9999-9999)" name="phone" value="{{ Auth::user()['attributes']['phone'] }}">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-4">
                                    <input type="checkbox" name="send_newsletter" id="send-newsletter" value="1"  @if (Auth::user()['attributes']['send_newsletter']) checked @endif><label for="send-newsletter">Yes, please send me emails about promotions.</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-4">
                                    <input type="checkbox" name="send_sms" id="send-sms" value="1"  @if (Auth::user()['attributes']['send_sms']) checked @endif><label for="send-sms">Yes, please send me text messages about promotions.</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Info
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('per_page_js')
    <script type="text/javascript" src="/js/password-score-combined.js"></script>
@endsection