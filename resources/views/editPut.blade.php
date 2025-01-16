@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')
<br>
<form action="{{route('posts.putUpdade', $id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-container">
        <h2>Edit Post</h2>

        <div class="input-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title"  required>

        </div>

        <div class="input-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4" required></textarea>

        </div>

        <button type="submit" class="submit-btn">Save Changes</button>
    </div>
</form>

<!-- Стиль, аналогичный созданию поста -->
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7fc;
    margin: 0;
    padding: 0;
  }

  .form-container {
    width: 100%;
    max-width: 500px;
    margin: 40px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
  }

  .input-group {
    margin-bottom: 20px;
    text-align: left;
  }

  .input-group label {
    font-size: 14px;
    color: #555;
    display: block;
    margin-bottom: 8px;
  }

  .input-group input,
  .input-group textarea {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 6px;
    box-sizing: border-box;
    margin-bottom: 8px;
    outline: none;
    transition: border-color 0.3s;
  }

  .input-group input {
    width: 100%; /* Default width for title input */
  }

  .input-group textarea {
    width: 100%; /* Default width for description textarea */
  }

  .input-group input:focus,
  .input-group textarea:focus {
    border-color: #007bff;
  }

  .error {
    color: red;
    font-size: 12px;
    margin-top: 5px;
  }

  .submit-btn {
    width: 100%;
    padding: 14px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .submit-btn:hover {
    background-color: #0056b3;
  }

  .submit-btn:focus {
    outline: none;
  }
</style>

@endsection
