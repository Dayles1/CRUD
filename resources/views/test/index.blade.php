<title>posts</title>
<h1>posts</h1>
<a href="{{ route('posts.create') }}">Create</a>
<hr>

@if ($posts->isEmpty())
    <p>No posts available.</p>
@endif

@foreach ($posts as $article)
    <h2>{{ $article->title }}</h2> 
    <p>{{ $article->description }}</p>
    <br>
@endforeach
