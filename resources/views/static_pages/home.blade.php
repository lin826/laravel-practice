@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      現在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入門教學</a> 的範例專案首頁。
    </p>
    <p>
      一切，將從這裡開始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">現在註冊</a>
    </p>
  </div>
@stop
