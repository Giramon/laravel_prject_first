<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование продукта</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Редактирование продукта</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $product->name }}"><br>
        <textarea name="description">{{ $product->description }}</textarea><br>
        <input type="text" name="price" value="{{ $product->price }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>