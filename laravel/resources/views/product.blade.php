<html>
<head>
    <title>Einzelseite</title>
    <link href="{{ asset('css/product.scss') }}" rel="stylesheet">
</head>

<body>
    
    <article>
        <img src="{{ $product->image }}" alt="{{ $product->name }}"/>
        <h3>{{ $product->name }}</h3>
        <h3>{{ $product->price }}</h3>
        <h4>{{ $product->manual}}</h4>
        <h4>{{ $product->details }}</h4>
    </article>
</body>
</html>