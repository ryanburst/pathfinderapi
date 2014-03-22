@extends('layouts.default')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="secondary-header">Register</h2>
        {{ Form::open(array('route' => 'users.store')) }}
          {{ View::make('_partials.user'); }}
          <div class="form-group">
            {{ Form::submit('Register',array('class'=>'btn btn-primary')) }}
            <a href="/login">Already have an account?</a>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop