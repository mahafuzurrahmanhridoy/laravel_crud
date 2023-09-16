@extends('admin.layout.master')

@section('title', 'Add Products')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add New</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Products List <a class="btn btn-small btn-outline-primary" href="{{route('products.index')}}">List</a>
            </div>
            <div class="card-body">
                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="title" value="{{ old('title') }}" id="productName"
                                    type="text" placeholder="Enter product name" />
                                <label for="title">Product Name</label>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" name="sku_number" id="number" type="text"
                                    value="{{ old('sku_number') }}" />
                                <label for="number">SKU Number</label>
                                @error('sku_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="description" name="description" type="text"
                                    placeholder="add description" />
                                <label for="description">Product Description</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="price" type="number" name="price" placeholder="price" />
                                <label for="price">Price</label>
                            </div>
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <input class="form-control" type="file" name="image" accept="image/*" />
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="isActive"
                                    checked>
                                <label class="form-check-label" for="isActive">
                                    Is Active
                                </label>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-block">Add New Product</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection