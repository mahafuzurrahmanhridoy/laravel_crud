@extends('admin.layout.master')

@section('title', 'Add Products')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Product</h1>
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
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
                <form action="{{route('products.update',['product'=> $product->id] )}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="title" value="{{ old('title', $product->title) }}"
                                    id="productName" type="text" placeholder="Enter product name" />
                                <label for="title">Product Name</label>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" name="sku_number" id="number" type="text"
                                    value="{{ old('sku_number', $product->sku_number) }}" />
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
                                <input class="form-control" id="description" type="text" name="description"
                                    placeholder="description" value="{{ old('description', $product->description) }}" />
                                <label for="price">Description</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="price" type="number" name="price" placeholder="price"
                                    value="{{ old('price', $product->price) }}" />
                                <label for="price">Price</label>
                            </div>
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mt-3 mb-3 mb-md-0">
                                <select id="category_id" name="category_id" value="" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $categoryId => $categoryTitle)
                                    <option value="{{$categoryId}}" @if ($product->category_id == $categoryId) selected
                                        @endif> {{$categoryTitle}} </option>
                                    @endforeach
                                </select>
                                <label for="category_id">Category</label>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="color">Color</label>
                            @foreach ($colors as $colorId => $colorName)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="color_id[]" value="{{$colorId}}"
                                    id="{{$colorId}}" @if (in_array($colorId,$selectedColorId)) checked @endif>
                                <label class="form-check-label" for="{{$colorId}}">{{$colorName}}</label>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" {{
                                    old('description', $product->description) }} id="isActive" checked>
                                <label class="form-check-label" for="isActive">
                                    Is Active
                                </label>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection