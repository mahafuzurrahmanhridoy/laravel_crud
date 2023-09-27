@extends('admin.layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Categories<a class="btn btn-small btn-outline-primary" href="{{route('categories.create')}}">Add Category</a>
    </div>
    <div class="card-body">

        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>
                        <a href="{{route('categories.edit', ['id' => $category->id])}}"
                            class="btn btn-outline-primary">Edit</a>
                        <a href="{{route('categories.show', ['id' => $category->id])}}"
                            class="btn btn-outline-info">Show</a>
                        <form action="{{route('categories.destroy', ['id' => $category->id])}}" method="POST"
                            style="display: inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('title')
Products List
@endsection