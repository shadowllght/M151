<html>
<head>
<link href="{{ asset('css/styling.scss') }}" rel="stylesheet">
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Preis</th>
        <th>Details</th>
    </tr>
    @foreach ($products as $product)
        <article>
            <h1>{{ $product->name }}</h1>
            <h3>{{ $product->price }}</h3>
            <h3><a href="/product/{{ $product->id }}">Link</a></h3>
        </article>
    @endforeach
</table>
</body>
</html>