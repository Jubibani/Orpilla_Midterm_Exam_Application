<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /*Internal CSS because i aint got no time cuhh */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .product {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .product h2 {
            margin: 0;
            color: #333;
        }
        .product p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Anime Products</h1>
    @foreach($products as $product)
        <div class="product">
            <h2>{{ $product['name'] }}</h2>
            <p><strong>Price:</strong> ${{ $product['price'] }}</p>
            <p><strong>Description:</strong> {{ $product['description'] }}</p>
        </div>
    @endforeach
</body>
</html>
