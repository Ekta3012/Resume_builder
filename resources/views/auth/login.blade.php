@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="box-shadow: 5px 5px 0px #888888;">
                <div class="panel-heading" style="background-color: #3f51b5; color: #fff; font-weight: bold;">
                                Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>
                            </div>
							<div class="col-md-2">OR</div>
							<div class="col-md-3">
								<a class="btn btn-primary btn-floating" href='{{ url('auth/fb') }}'>
									Login with Facebook
								</a>
							</div>
                        </div>
                        <div class="row">
							<div class="col-md-4 col-md-offset-4">
								<a class="btn btn-link disabled" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


