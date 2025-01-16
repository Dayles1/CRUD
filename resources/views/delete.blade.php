@extends('layouts.app')
@section('title', 'Delete Post')
@section('content')
    <div class="container" style="max-width: 600px; margin: 50px auto; padding: 30px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); color: #333;">
        <h1 class="text-center" style="font-size: 32px; margin-bottom: 30px; color: #333; font-weight: bold;">Are you sure you want to delete this post?</h1>

        <form action="{{ route('posts.destroy', $id) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')

            <div class="form-group text-center" style="margin: 20px 0;">
                <button type="submit" class="btn btn-danger" style="font-size: 18px; padding: 15px 30px; border-radius: 8px; background-color: #dc3545; color: white; border: none; width: 100%; transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s; margin-bottom: 20px;">Yes, delete it</button>
            </div>

            <div class="form-group text-center" style="margin: 20px 0;">
                <a href="{{ route('index') }}" class="btn btn-success" style="font-size: 18px; padding: 15px 30px; border-radius: 8px; background-color: #28a745; color: white; border: none; width: 100%; transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;">Cancel</a>
            </div>
        </form>
    </div>

    <style>
        body {
            background-color: #2f2f2f;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            background-color: #bd2130;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
@endsection
