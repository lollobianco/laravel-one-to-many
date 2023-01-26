@extends('layouts.app')

@section('content')

    <div class="container d-flex flex-column align-items-center text-white">

      <h2 class="mb-4">{{$post->title}}</h2>

      <p>{{$post->body}}</p>

    </div>

@endsection