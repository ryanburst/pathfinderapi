{{ $errors->first('form','<div class="alert alert-danger">:message</div>') }}
<div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : false }}">
  {{ Form::label('email', 'Email') }}
  {{ Form::email('email',(isset($user) ? $user->email : null),array('class'=>'form-control')) }}
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