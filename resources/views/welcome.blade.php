{{-- <x-layout :categories='$categories'> --}}
    <x-layout>
        <x-slot:title>
            Camera World
            </x-slot>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/' . $product->image) }}" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text">{{$product->title}}</p>
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
                @endforeach
                <div class="d-flex">
                    {{ $products->links() }}
                </div>
            </div>
    </x-layout>