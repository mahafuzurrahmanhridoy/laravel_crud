@extends('admin.layout.master')

@section('title', 'Add Products')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit <a class="btn btn-small btn-outline-primary" href="{{route('sellers.index')}}">List</a>
            </div>
            <div class="card-body">
                <form action="{{route('sellers.update',['id'=>$sellers->id])}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="shopname"
                                    value="{{ old('shopname',$sellers->shopname) }}" id="" type="text"
                                    placeholder="Enter shopname" />
                                <label for="title">Shop Name</label>
                                @error('shopname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="location"
                                    value="{{ old('location',$sellers->location) }}" id="" type="text"
                                    placeholder="Enter location" />
                                <label for="title">Location</label>
                                @error('location')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection