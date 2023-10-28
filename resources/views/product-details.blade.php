{{-- <x-master :categories='$categories'> --}}
    <x-master>
        <x-slot:title>
            Camera World | Product Details
            </x-slot>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/' . $product->image) }}" width="100%" height="225">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-text">{{$product->title}}</h1>
                        <h3 class="card-text">{{$product->price}}</h3>
                        <hr>
                        <p>{{$product->description}}</p>

                        <form action={{route('cart.store')}} method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            Qty: <input type="number" name="qty" placeholder="qty" required>

                            @if (count($product->colors))
                            Color:
                            <select name="color_id" required>
                                @foreach ($product->colors as $color)
                                <option value="{{$color->id}}">{{$color->name}}</option>
                                @endforeach
                            </select>
                            @endif
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="submit" class="btn btn-sm btn-outline-primary">Add to Cart</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </x-master>