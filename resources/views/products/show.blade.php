<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>{{ $product->name }}</h1>
    </header>
    <main>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
    </main>
</body>
</html>