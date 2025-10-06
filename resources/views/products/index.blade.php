<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Каталог товаров</h1>
    </header>
    <main>
        <a href="{{ route('products.create') }}">Create tovar</a>
        <div class="container" style="width: 1200px;display:flex;flex-wrap:wrap;margin:100px auto;justify-content:space-between;">
            @foreach ($products as $product)
                <div class="card" style="width: 300px;padding:20px;border:1px solid black;">
                    <a href="{{ route('products.show', $product->id) }}" style="color: black;text-decoration:none;">
                        <h2>{{ $product -> name }}</h2>
                        <p>{{ $product -> description }}</p>
                        <p>{{ $product -> price }}</p>
                    </a>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                    <a href="{{ route('products.edit', $product->id) }}">Update</a>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>