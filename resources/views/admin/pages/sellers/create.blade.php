@extends('admin.layout.master')

@section('title', 'Add Products')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add New Seller</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Seller</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Sellers List <a class="btn btn-small btn-outline-primary" href="{{route('sellers.index')}}">Sellers
                    List</a>
            </div>
            <div class="card-body">
                <form action="{{route('sellers.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="shopname" value="{{ old('shopname') }}"
                                    id="sellerName" type="text" placeholder="Enter seller name" />
                                <label for="title">Seller Name</label>
                                @error('shopname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" name="location" type="text" placeholder="shop location"
                                    value="{{ old('location') }}" />
                                <label for="title">Shop Location</label>
                                @error('location')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <input class="form-control" type="file" name="image" accept="image/*" />
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Add New Seller</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection