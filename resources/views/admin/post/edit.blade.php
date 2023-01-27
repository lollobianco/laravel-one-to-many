@extends('layouts.app')

@section('content')

  <div class="container p-5 text-white">

    <h1 class="text-center p-4">Modify Post</h1>

    <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" value="{{$post->title}}" type="text" class="form-control @error('title') is-invalid @enderror">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="body" class="form-control @error('body') is-invalid @enderror">
          {{$post->body}}
        </textarea>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div>
        <label class="form-label">Category</label>
        <select class="form-control w-100 mb-3" name="category_id">
          @if (is_null($post->category))
          <option selected>Select Category</option>
          @else
          <option selected>{{$post->category['name']}}</option>
          @endif
          @foreach ($categories as $category)    
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Modify Post</button>

    </form>

  </div>

@endsection
