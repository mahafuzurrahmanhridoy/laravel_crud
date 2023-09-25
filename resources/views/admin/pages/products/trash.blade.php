@extends('admin.layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Products List <a class="btn btn-small btn-outline-primary" href="{{route('products.index')}}">Product List</a>
    </div>
    <div class="card-body">

        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>SKU Number</th>
                    <th>Description</th>
                    <th>price</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->sku_number}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->is_active ? 'Active':'Inactive'}}</td>
                    <td><img src="{{ asset('images/' . $product->image) }}" width="50" height="50">
                    </td>
                    <td>
                        <form action="{{route('products.restore', [$product->id])}}" method="POST"
                            style="display: inline">
                            @csrf
                            @method('patch')
                            <button class="btn btn-outline-warning"
                                onclick="return confirm('Are you sure want to restore?')">Restore</button>
                        </form>

                        <form action="{{route('products.delete', [$product->id])}}" method="POST"
                            style="display: inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger"
                                onclick="return confirm('This item will be delete permanently?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
@endsection
@section('title')
Products List
@endsection