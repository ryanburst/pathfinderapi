@extends('layouts.default')
@section('content')
  <div class="container">
    <h1 class="page-header">Your Account</h1>
    <h2>Keys</h2>
    <p>
      <strong>Public Key</sting> <br />
      <code>{{ $user->public_key }}</code>
    </p>
    <p>
      <strong>Private Key</sting> <br />
      <code>{{ $user->getPrivateKey() }}</code>
    </p>
  </div>
@stop