<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание продукта</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Создание продукта</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name"><br>
        <textarea name="description"></textarea><br>
        <input type="text" name="price"><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>