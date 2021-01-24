@extends('layouts.app')

@section('content')
<div class="container">
  @forelse($posts as $post)
    <div class="card">
      <div class="card-header">{{$post->user->name}}</div>
      <div class="card-body">
        <p class="card-text">{{$post->body}}</p>
        <p class="card-text"><a href="{{route('posts.show',$post->id)}}">詳細をみる</a></p>

        @auth
        @unless($post->bookmarkingUsers->contains(Auth::id()))
            <form method="POST" action="{{ route('bookmarks.add', $post->id) }}">
            @csrf
            <button type="submit" class="btn btn-success">ブックマークする</button>
            </form>
            @else
            <form method="POST" action="{{ route('bookmarks.remove', $post->id) }}">
              @csrf
              <button type="submit" class="btn btn-danger">ブックマークを解除する</button>
            </form>
        @endunless
        @endauth 
       
      </div>
    </div>
    @empty
      <p>ブックマークはありません</p>
    @endforelse
</div>
@endsection