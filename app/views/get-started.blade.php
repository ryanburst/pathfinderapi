@extends('layouts.default')
@section('content')
  <div class="container get-started">
    <h1 class="page-header">Get Started</h1>
    <p>Pathfinder is a great game with a <strong>ton</strong> of resources and tools. The Pathfinder API is here to help expose some of that information in a way that's digestible and easy for others to create their own awesome tools. Data gets you excited doesn't it? Nerd. Don't worry, you're in good company.</p>
    <p>There are a number of resources available on this website, but before you go crazy and start building away, follow these simple steps and run some API tests right here in our test suite. You'll be able to see the data you can expect back and determine if this API is the right tool for you.</p>
    <ol>
      <li>First off, <a href="/register">create an account</a>. Why? Because next step.</li>
      <li><a href="/account">Grab your API key</a> (the public one). Keys are important so I know who's sucking up my bandwidth.</li>
      <li><a href="/endpoints">Check out the available endpoints</a> and use your key to interact with the API.</li>
      <li>That's it! Go you! As always, be mindful of your <strong>rate limit</strong> and <strong>give attribution</strong> where necessary.</li>
    </ol>
    <p>Don't see something you want? Feel free to <a href="/submit-issue">submit an issue</a> and I'll see what I can do. At the moment, the current data this API is churning out is the data I could easily get my hands on.</p>
  </div>
@stop