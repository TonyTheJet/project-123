@include('partials.header')

<form class="form-horizontal" action="{!! url('/login/post') !!}" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label class="col-xs-4 col-sm-3 col-md-2" for="email">Email</label>
        <div class="col-xs-8 col-sm-9 col-md-10">
            <input type="email" name="email" class="form-control" required />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-xs-4 col-sm-3 col-md-2" for="password">Password</label>
        <div class="col-xs-8 col-sm-9 col-md-10">
            <input type="password" name="password" class="form-control" required />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-sm-9 col-md-10 col-xs-offset-4 col-sm-offset-3 col-md-offset-2">
            <button type="submit" class="btn btn-primary">Log In</button> &nbsp;&nbsp;<a href="{!! url('/forgot-password') !!}" class="btn btn-default">Forgot Password</a>
        </div>
    </div>
</form>

@include('partials.footer')