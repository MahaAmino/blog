@extends("layout.app")

@section("title","show post")

@section("content")
<h1>🤍{{ $post->title }}🤍</h1>
<p>{{ $post->description }}</p>
<br>
<img src="/assets/imgs/{{ $post->image }}" class="img-fluid" alt="" width="400" height="600">
<br>
<br>
<br>
<button class="btn btn-warning a"><a href="/">Home</a></button>
@endsection

