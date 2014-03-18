@extends('layouts.default')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="secondary-header">Login</h2>
        {{ Form::open(array('route' => 'sessions.store')) }}
          @if( Session::get('flash_message') )
            <div class="alert alert-danger">{{ Session::get('flash_message') }} </div>
          @endif
          <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email',null,array('class'=>'form-control')) }}
          </div>
          <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password',array('class'=>'form-control')) }}
          </div>
          {{ Form::submit('Login',array('class'=>'btn btn-primary')) }}
          <a href="/register">Create an account</a>
        {{ Form::token() }}
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop