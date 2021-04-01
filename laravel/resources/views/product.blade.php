<html>

<head>
    <title>Produkt xyz</title>
    <link href="{{ asset('css/styling.scss') }}" rel="stylesheet">
</head>

<body>

    <article>
        <img src="{{ $product->image }}" alt="{{ $product->name }}" />
        <h3>{{ $product->name }}</h3>
        <h3>{{ $product->price }}</h3>
        <h4>{{ $product->manual}}</h4>
        <h4>{{ $product->details }}</h4>
    </article>

    <button id=addProduct>Add to checkout</button>
</body>

</html>