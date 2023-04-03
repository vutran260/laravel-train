<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index function of ProductsController</h1>
    {{-- <h2>Tittle: {{ $title }}</h2>
    <h3>x: {{ $x }}</h3>
    <h3>y: {{ $y }}</h3> --}}
    {{-- <h3>name = {{ $name }}</h3> --}}
    {{-- <h2>MyPhone info</h2>
    @foreach ($myPhone as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}

    {{-- <h2>Product info</h2>
    @foreach ($products as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}

    {{-- <h3>{{ $product }}</h3> --}}
    <a href="{{ route('products')}}">Link to Products</a>
</body>
</html>