@extends('layouts.default')
@section('content')
  <div class="container">
    <h1 class="page-header">Help</h1>
    <p>Got a question the documentation didn't answer? Fill out the form below and it will notify me in a timely manner. Attempting to <a href="http://www.d20pfsrd.com/magic/all-spells/m/message">message</a> me otherwise will fail, the DC for this check is quite high.</p>
    <p>If you found a bug, you can <a href="/submit-issue">submit an issue</a>.</p>
    {{ Form::open(array('url' => 'help')) }}
      <div class="form-group">
        {{ Form::label('name', 'Your Name') }}
        {{ Form::text('name',null,array('class'=>'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('email', 'Your Email') }}
        {{ Form::email('email',null,array('class'=>'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('reason', 'Please select a reason you are contacting me') }}
        <?php echo Form::select('reason', array(
            '' => 'Select an option',
            'I honestly have no idea what I\'m doing' => 'I honestly have no idea what I\'m doing',
            'I have a question about my rate limit' => 'I have a question about my rate limit',
            'I have a question about authorization' => 'I have a question about authorization',
            'I found a bug' => 'I found a bug',
            'I have a question about the data' => 'I have a question about the data',
            'I have a suggestion!' => 'I have a suggestion!',
            'I have something else, stop trying to pigeon hole me' => 'I have something else, stop trying to pigeon hole me'
        ),'',array('class'=>'form-control')); ?>
      </div>
      <div class="form-group">
        {{ Form::label('comment', 'Your Comment or Question') }}
        {{ Form::textarea('comment',null,array('class'=>'form-control')) }}
      </div>
      {{ Form::submit('Submit',array('class'=>'btn btn-info')) }}
    {{ Form::token() }}
    {{ Form::close() }}
  </div>
@stop