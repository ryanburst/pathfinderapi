@extends('layouts.default')
@section('content')
  <div class="container home">
    <p class="lead text-center">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
    <div class="divider arrow-down"></div>
    <div class="row promo">
      <div class="col-sm-4">
        <h2><a href="/get-started">Easy Quick Start</a></h2>
        <div class="row">
          <div class="col-xs-2 col-sm-3 col-md-2 text-center">
            <span class="glyphicon glyphicon-ok-sign"></span>
          </div>
          <div class="col-xs-10 col-sm-9 col-md-10">
            Get started in seconds. Just create an account, grab <a href="/account">your key</a>, and head over to the <a href="/docs">test suite</a> to make some calls.
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <h2><a href="/docs">Interactive Test Suite</a></h2>
        <div class="row">
          <div class="col-xs-2 col-sm-3 col-md-2 text-center">
            <span class="glyphicon glyphicon-list"></span>
          </div>
          <div class="col-xs-10 col-sm-9 col-md-10">
            Thanks to Swagger UI, you can interact with the Pathfinder API instantly to begin planning your webapp.
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <h2><a href="/authentication">Easy Authentication</a></h2>
        <div class="row">
          <div class="col-xs-2 col-sm-3 col-md-2 text-center">
            <span class="glyphicon glyphicon-lock"></span>
          </div>
          <div class="col-xs-10 col-sm-9 col-md-10">
            Server-side or client-side, interacting with the Pathfinder API is easy. Grab <a href="/account">your key</a> or head on over to the documentation section to get started.
          </div>
        </div>
      </div>
    </div>
    <div class="divider arrow-down"></div>
    <div class="row next">
      <div class="col-sm-12">
        <h2 class="secondary-header">What's Next?</h2>
        <p>This is just the beginning. There is a lot of data out there for Pathfinder and it's just waiting to be put into a form other people can use to create new and exciting tools. If you have a line on some data that's available for consumption, I'd love to add it to the API. For now, this is what I have lined up:</p>
      </div>
    </div>
    <div class="row next-list">
      <div class="col-sm-6">
        <h3>Weapons and Armor <span class="glyphicon glyphicon-chevron-right"></span></h3>
        <p>The d20pfsrd.com site didn't have a ready available database for me to pull, so as soon as I can get it into a form I can use, I'll make an endpoint for this.</p>
        <h3>Vivamus Sagittis <span class="glyphicon glyphicon-chevron-right"></span></h3>
        <p>Lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
      </div>
      <div class="col-sm-6">
        <h3>Generators <span class="glyphicon glyphicon-chevron-right"></span></h3>
        <p>There are a lot of good generators out there, but it would be nice to be able to consume and leverage them. Here are a few that I have in mind.</p>
        <h4>Names</h4>
        <p>There are plenty of name generators out there, but wouldn't it be nice to not have to build your own? Adding an endpoint here seems fairly trivial. Make an API request for a name, or a bunch of names, get 'em back.</p>
        <h4>Treasure</h4>
        <p>Everyone loves loot (especially that sneaky Rogue that's always trying to pickpocket their team members). Ask for treasure, and you shall receive. A JSON response anyway.</p>
      </div>
    </div>
  </div>
@stop