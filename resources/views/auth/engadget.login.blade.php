@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default col-md-12">
                    <a href="http://localhost/user/forgot" class="btn-lg btn-link pull-right">Forgot username or password?</a>
                    <div class="panel-heading">LOGIN</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/user/login', 'method' => 'post', 'accept-charset' => 'UTF-8', 'class' => 'form-horizontal']) !!}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email" class="col-md-12 col-md-offset-0">Username / Email</label>
                                <div class="col-md-12 col-md-offset-0">
                                    <input class="form-control" required="required" autofocus="autofocus" name="email" type="email" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-12 col-md-offset-0">Password</label>
                                <div class="col-md-12 col-md-offset-0">
                                    <input id="password" class="form-control" required="required" name="password" type="password" value="">
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