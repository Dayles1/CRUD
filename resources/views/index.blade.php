@extends('layouts.app')

@section('title','All Posts')

@section('content')
<hr>
<div class="posts-container">
    @if ($posts->isEmpty())
        <p class="no-posts">No posts available.</p>
    @else
        @foreach ($posts as $post)
            <div class="post-card">
                <h2 class="post-title">{{ $post->title }}</h2> 
                <p class="post-description">
                    {{ $post->description }}
                </p>
                <img src="{{asset('/storage/' . $post->path)}}" alt="" width="50">
            </div>
      
            <div class="post-actions">
                <a href="{{ route('posts.patch', $post) }}" class="patch-link first-patch">WRITE...(patch)</a>
                <a href="{{ route('posts.put', $post->id) }}" class="patch-link">EDIT(put)</a>
                <a href="{{ route('posts.delete', $post->id) }}" class="delete-link">DELETE</a>
            </div>
        @endforeach
    @endif
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fc;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .posts-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .no-posts {
        text-align: center;
        font-size: 18px;
        color: #888;
    }

    .post-card {
        background-color: #fff;
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .post-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .post-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
        text-align: center;
    }

    .post-description {
        font-size: 16px;
        color: #555;
        line-height: 1.5;
    }

    .post-actions {
        display: flex;
        justify-content: flex-end; 
        gap: 10px; 
        margin-top: 15px;
    }

    .patch-link,
    .delete-link {
        font-size: 12px;
        padding: 6px 12px;
        text-decoration: none;
        border-radius: 4px;
        text-align: center;
    }

    .first-patch {
        background-color: #28a745; /* Зеленый цвет для первой кнопки */
        color: white;
    }

    .first-patch:hover {
        background-color: #218838;
        text-decoration: none;
    }

    .patch-link:not(.first-patch) {
        background-color: #007bff; /* Стандартный цвет для остальных кнопок */
        color: white;
    }

    .patch-link:not(.first-patch):hover {
        background-color: #0056b3;
        text-decoration: none;
    }

    .delete-link {
        background-color: #e74c3c;
        color: white;
    }

    .delete-link:hover {
        background-color: #c0392b;
        text-decoration: none;
    }

    hr {
        border: 1px solid #ddd;
        margin: 30px 0;
    }
</style>

@endsection
