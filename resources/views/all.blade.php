@extends('layouts.app')
@section('title', 'Post Methods')
@section('content')

    <h1>Post Methods Example</h1>

    <!-- GET ALL -->
    <section>
        <h2>GET - All Posts</h2>
        <div>
            @foreach ($posts as $post)
                <p>{{ $post->title }} - {{ $post->description }}</p>
            @endforeach
        </div>
    </section>

    <!-- CREATE POST -->
    <section>
        <h2>POST - Create Post</h2>
        <form action="{{ url('posts/store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="4" required></textarea>
            </div>

            <button type="submit">Create Post</button>
        </form>
    </section>

    <!-- DELETE  -->
    <section>
        <h2>DELETE - Delete Post</h2>
        <form action="{{ url('posts/' . $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Post</button>
        </form>
    </section>

    <!-- PATCH -->
    <section>
        <h2>PATCH - Edit Post</h2>
        <form action="{{ url('posts/update/' . $post->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}" required>
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="4" required>{{ $post->description }}</textarea>
            </div>

            <button type="submit">Update Post</button>
        </form>
    </section>

    <!-- PUT  -->
    <section>
        <h2>PUT - Update Post (PUT Method)</h2>
        <form action="{{ url('posts/pu/edit/' . $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}" required>
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="4" required>{{ $post->description }}</textarea>
            </div>

            <button type="submit">Update Post</button>
        </form>
    </section>

@endsection
