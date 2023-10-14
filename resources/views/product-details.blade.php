{{-- <x-layout :categories='$categories'> --}}
    <x-layout>
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
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

    </x-layout>