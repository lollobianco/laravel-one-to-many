@extends('layouts.app')

@section('content')
  <div class="container d-flex flex-column align-items-center">

    <a class="btn btn-primary mb-4" href="{{ route('admin.posts.create') }}">
      <h4 class="m-0">Create new Post</h4>
    </a>

    @foreach ($posts as $post)
      <div class="card mb-4 bg-secondary text-white" style="width: 28rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->body }}</p>
          <p class="card-text">{{ $post->category_id }}</p>

          <div class="d-flex justify-content-between">

            <div>
              <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Show Post</a>
            </div>
            <div>
              <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>
            </div>

            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">

              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger">Delete Post</button></a>

            </form>

          </div>

        </div>
      </div>
    @endforeach

    <div>{{ $posts->links() }}</div>

  </div>
@endsection
