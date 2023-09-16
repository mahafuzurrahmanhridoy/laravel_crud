@extends('admin.layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h4>
            Showing Product
            <a href="{{route('products.index')}}" class="btn btn-small btn-outline-primary">Go Back</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">SKU Number</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->sku_number}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><img src="{{ asset('images/' . $product->image) }}" width="50" height="50">
                                    </td>
                                    <td>{{$product->is_active ? 'Active':'Inactive'}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection