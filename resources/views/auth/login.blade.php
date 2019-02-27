@extends('layouts.login')

@section('login-container')
<div class="ks-page">
    <div class="ks-page-header">
        <a href="#" class="ks-logo">CRM</a>
    </div>
    <div class="ks-page-content">
        <div class="ks-logo">CRM</div>

        <div class="card panel panel-default ks-light ks-panel ks-login">
            <div class="card-block">
                <form method="POST" class="form-container" action="{{ route('login') }}">
                    @csrf
                    <h4 class="ks-header">{{ __('Login') }}</h4>
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autofocus>
                            <span class="icon-addon">
                                <span class="la la-at"></span>
                            </span>
                        </div>
                        @if ($errors->has('email'))
                        {!! $errors->first('email','<label class="text-danger" style="margin-top:3px;">:message</label>') !!}
                        @endif
                    </div>
       
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" required>
                            <span class="icon-addon">
                                <span class="la la-key"></span>
                            </span>
                        </div>
                        @if ($errors->has('password'))
                        {!! $errors->first('password','<span class="text-danger">:message</span>') !!}
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>
                    </div>
                    
                    <div class="ks-text-center">
                        Don't have an account. <a href="{{ route('register') }}">Sign Up</a>
                    </div>
                    <div class="ks-text-center">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="ks-social">
                        <div>or Log In with social</div>
                        <div>
                            <a href="#" class="facebook la la-facebook"></a>
                            <a href="#" class="twitter la la-twitter"></a>
                            <a href="#" class="google la la-google"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="ks-footer">
        <span class="ks-copyright">&copy; 2016 Kosmo</span>
        <ul>
            <li>
                <a href="#">Privacy Policy</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
</div>
@endsection
