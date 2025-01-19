<title>Validate</title>
<h1>ALL Validate</h1>
<h3>User</h2>

<form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
    @error('name')
    <div style="color: red;">{{ $message }}</div>
@enderror

    <label for="email">emai:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
    @error('email')
    <div style="color: red;">{{ $message }}</div>
@enderror

    <label for="age">age:</label>
    <input type="number" id="age" name="age" value="{{ old('age') }}"><br>
    @error('age')
    <div style="color: red;">{{ $message }}</div>
@enderror
<h3>Image</h1>
<label for="image">image:</label>
<input type="file" id="image" name="image"  value="{{ old('image') }}" >
@error('image')
    <div style="color: red;">{{ $message }}</div>
@enderror
<br>
<h3>Product</h3>
<label for="p_name">Product name</label>
<input type="text" name="product_name" id="p_name" >
<label for="price">price</label>
<input type="text" name="price" id="price" >
<br>
<h3>Date</h3>
<label for="date">date:</label>
<input type="date" id="date" name="date"  >
@error('date')
    <div style="color: red;">{{ $message }}</div>
@enderror
<br>
<h3>Password</h3>
<label for="password">Password</label>
<input type="password" name="password" id="password">
@error('password')
<div style="color: red;">{{ $message }}</div>
@enderror
<br>

<label for="password_confirmation">password_confirmation:</label>
<input type="password" id="password_confirmation" name="password_confirmation" >
@error('password')
<div style="color: red;">{{ $message }}</div>
@enderror
<br>
<h3>Url</h3>
<label for="url">URL:</label>
<input type="url" id="url" name="url" value="{{ old('url') }}" >
@error('url')
    <div style="color: red;">{{ $message }}</div>
@enderror
<br>

<br>
    <button type="submit">submit</button>
</form>





<style>
    button[type="submit"] {
        font-size: 18px;
        padding: 15px 30px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>