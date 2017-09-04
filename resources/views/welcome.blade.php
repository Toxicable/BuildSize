@extends('layouts.master')

@section('body')
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{ config('app.name') }}</h1>
      <p>
        Automatically track the size of your build artifacts
      </p>
      <p>
        <a class="btn btn-primary btn-lg" href="{{ \App\UrlHelper::getGithubAppURL() }}" role="button">
          Get Started &raquo;
        </a>
      </p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>No Configuration Necessary</h2>
        <p>
          If you are using CircleCI* and it is configured to archive your artifacts, getting started
          with {{ config('app.name') }} is easy! Just add the app to your repo and that's it!
        </p>
        <p class="text-muted">* Support for other CI systems coming soon</p>
      </div>
      <div class="col-md-4">
        <h2>Monitors Pull Requests</h2>
        <p>
          If a pull request significantly increases the size of any of your build artifacts,
          {{ config('app.name') }} will automatically set a build status, and optionally post a comment
          to the PR.
        </p>
      </div>
      <div class="col-md-4">
        <h2>Historical Data</h2>
        <p>View how the size of your build has changed over time</p>
        <p class="text-muted">Coming soon</p>
      </div>
    </div>
  </div>
@endsection
