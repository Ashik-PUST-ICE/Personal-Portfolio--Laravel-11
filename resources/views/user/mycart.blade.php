

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    @include('user.css')
</head>
<body>

@include('user.nav')

<div>
    @foreach($products as $product)
    <div class="product-item">
        <h3>{{ $product->product_name }}</h3>
        <p>{{ $product->description }}</p>
        <p>${{ $product->price }}</p>
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">
        <a href="{{ route('add-to-cart', $product->id) }}" class="btn-add-to-cart">Add to Cart</a>
    </div>

    <a href="{{ route('remove-from-cart',$product->id) }}">Remove</a>
@endforeach





</div>

</body>

@include('user.footer')









@include('user.js')
</html>




