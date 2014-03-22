@extends('layouts.default')
@section('content')
  <div class="container">
    <h1 class="page-header">Your Account</h1>
    {{ Form::open(array('route'=>'users.update','method'=>'PATCH')) }}
      @if( Session::get('flash_message_success') )
        <div class="alert alert-success">{{ Session::get('flash_message_success') }} </div>
      @endif
      <h2>Keys</h2>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5">
          <strong>Public Key</strong> <br />
          <code class="code-block text-center">{{ $user->public_key }}</code>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5">
          <strong>Private Key</strong> <br />
          <code class="code-block text-center">{{ $user->getPrivateKey() }}</code>
        </div>
      </div>
      <h2>Referers</h2>
      <div id="Referers">
	      @foreach( $user->referers as $index => $referer )
	        <div class="row form-group">
	          <div class="col-xs-9 col-sm-4">
	            {{ Form::label('referer[]','Referer',array('class'=>'sr-only')) }}
	            <input type="text" name="referer[]" class="form-control" value="{{ $referer->url }}" />
	          </div>
	          <div class="col-xs-3 col-sm-1">
	            <p class="form-control-static"><a href="#">Delete</a></p>
	          </div>
	        </div>
	      @endforeach
		    <p> <a href="#">Add a new referer</a> </p>
      </div>
      <h2>Account</h2>
      {{ View::make('_partials.user')->with('user',$user); }}
      <div class="form-group">
        {{ Form::submit('Update',array('class'=>'btn btn-primary')) }}
      </div>
    {{ Form::close() }}
  </div>
@stop