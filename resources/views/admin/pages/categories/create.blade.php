@extends('admin.layout.master')

@section('title', 'Add Products')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Add New</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Categories</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Categories <a class="btn btn-small btn-outline-primary" href="{{route('categories.index')}}">List</a>
            </div>
            <div class="card-body">
                <form action="{{route('categories.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="title" value="{{ old('title') }}" id="productName"
                                    type="text" placeholder="Enter category" />
                                <label for="title">Category</label>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-block">Create</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection