@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default col-md-12">
                {{ Html::link('user/forgot', 'Forgot username or password?', ['class' => 'btn-lg btn-link pull-right'] ) }}
                <div class="panel-heading">LOGIN</div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/user/login', 'method' => 'post', 'accept-charset' => 'UTF-8', 'class' => 'form-horizontal']) !!}
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 col-md-offset-0">Username / Email</label>
                        <div class="col-md-12 col-md-offset-0">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
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
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Login</button>or
                            @include('layouts.partials.oauth')
                        </div>
                    </div>
                    {!! Form::close() !!}
                    {{ Html::link('user/register', 'Sign Up', ['class' => 'btn btn-success'] ) }}
                    Become a new member of the Engadget community now.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
