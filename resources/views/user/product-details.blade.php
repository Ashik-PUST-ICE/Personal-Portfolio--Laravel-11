

<h1>{{ $product->product_name }}</h1>
<p>{{ $product->description }}</p>
<p>${{ $product->price }}</p>
<img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">
<a href="{{ route('add-to-cart', $product->id) }}" class="btn-add-to-cart">Add to Cart</a>
