@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>Status List</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      Now you are seeing <a href="https://learnku.com/courses/laravel-essential-training">Laravel Essential Training's</a> project webpage.
    </p>
    <p>
      Everything starts here.
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Register Now</a>
    </p>
  </div>
  @endif
@stop

<!--
  ————————————————
  Original Author：Summer
  Reference: https://learnku.com/courses/laravel-essential-training/6.x/according-to-weibo/5495
-->
