@extends('layouts.app')

@section('content')

    <div class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-12">
                    <div class="register">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 col-12">
                                <div class="section-title text-center">
                                    <h4 class="fw-7">Log In To Your Accounts</h4>
                                    <p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                                <form  method="POST" action="{{ route('login') }}">

                                {{ csrf_field() }}
                     <!--               <div class="form-group mt-30">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Your Email..">
                                    </div>
-->

                                    <div class="form-group mt-30{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email.."  required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>





                     <!--               <div class="form-group mt-30">
                                        <label>Password</label>
                                        <input type="email" class="form-control" placeholder="Your Password..">
                                    </div>
-->

                                    <div class="form-group mt-30{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Your Password.." required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>





                                    <button type="submit" class="btn btn-primary btn-block reg-btn">Submit Now</button>
                                </form>

                                <ul class="mt-30 login-option">
                                    <li><a class="float-sm-left float-none" href="{{ route('password.request') }}">Forget Password ?</a></li>
                                    <li><span class="float-right float-sm-right float-none">Already Have an Account ? <a href="{{url('register')}}">Create Account.</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>     --->
@endsection
