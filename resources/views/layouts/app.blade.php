<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel E-commerce</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="{{ route('products.index') }}">Products</a>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 Laravel E-commerce</p>
    </footer>
</body>
</html>
