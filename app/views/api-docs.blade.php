@extends('layouts.default')
@section('content')
  <div class="container">
    <h1 class="page-header">Documentation</h1>
    <p>The information below details the resources, endpoints, error messages, and other information needed to fully utilize this API. At the moment there is no API Key or authentication method. Once an authentication method is put into place, you will likely have to create an account and generate an API key.</p>
    <p>Since this API is primarily about exposing Pathfinder data to you in a way you can consume for your own purposes, this API is currently 100% read-only. You'll notice all the resources below only have <code>GET</code> endpoints.</p>
    <h3>Resources</h3>
    <div id="message-bar" class="swagger-ui-wrap">
      &nbsp;
    </div>
    <div id="api-docs" class="swagger-ui-wrap"></div>
  </div>
@stop