@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default col-md-12">
                <div class="panel-heading">NEW ACCOUNT</div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/user/register', 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 col-md-offset-0">Email</label>
                            <div class="col-md-12 col-md-offset-0">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 col-md-offset-0">Username</label>
                            <div class="col-md-12 col-md-offset-0">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 col-md-offset-0">Password</label>
                            <div class="col-md-12 col-md-offset-0">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-12 col-md-offset-0">Re-enter Password</label>
                            <div class="col-md-12 col-md-offset-0">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tos') ? ' has-error' : '' }}">
                            <label for="tos" class="col-md-12 col-md-offset-0">
                                {{
                                    Form::checkbox('tos', 1, old('tos'), ['name' => 'tos', 'required'])
                                }} I have read and agree to the {{
                                    Html::link('http://legal.aol.com/TOS/', 'TOS', [], null, false)
                                }} and {{
                                    Html::link('https://privacy.aol.com/', 'Privacy Policy', [], null, false)
                                }}
                            </label>
                        </div>
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-12 col-md-offset-0">
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block"><strong>{{ $errors->first('g-recaptcha-response') }}</strong></span>
                                @endif
                                {!! Captcha::display('null', ['required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Register</button>or
                                @include('layouts.partials.oauth')
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
{!! Captcha::script() !!}
@endsection
