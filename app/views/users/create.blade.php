@extends('layouts.default')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="secondary-header">Register</h2>
        {{ Form::open(array('route' => 'users.store')) }}
          <div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : false }}">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email',null,array('class'=>'form-control')) }}
            @if( $errors->has('email') )
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            <p class="help-block">{{ $errors->first('email') }}</p>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password') ? 'has-error has-feedback' : false }}">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password',array('class'=>'form-control')) }}
            @if( $errors->has('password') )
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            <p class="help-block">{{ $errors->first('password') }}</p>
            @endif
          </div>
          <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirm Password') }}
            {{ Form::password('password_confirmation',array('class'=>'form-control')) }}
          </div>
          {{ Form::submit('Register',array('class'=>'btn btn-primary')) }}
          <a href="/login">Already have an account?</a>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop