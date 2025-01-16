<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7fc;
      color: #333;
      line-height: 1.6;
      margin: 0;
    }

    header {
      background-color: #333;
      color: white;
      padding: 10px 20px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: row;
    }

    .logo {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }

    header h1 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 10px;
      padding-bottom: 20px;
    }

    nav a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      padding: 12px 20px;
      border-radius: 8px;
      background-color: #000000; /* Черный цвет */
      display: inline-block;
      width: 200px;
      text-align: center;
      font-weight: bold;
      transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;
    }

    nav a:hover {
      background-color: #333333; /* Темно-серый при наведении */
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    nav a:active {
      background-color: #1a1a1a; /* Еще более темный оттенок при нажатии */
    }

    .container {
      max-width: 1100px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <header>
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    <h1>My Posts</h1>
  </header>

  <nav>
    <a href="/posts">All Posts</a>
    <a href="/posts/create">Create Post</a>
  </nav>

  <div class="container">
    @yield('content')
  </div>

</body>
</html>
