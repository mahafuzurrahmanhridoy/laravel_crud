@extends('admin.layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Categories<a class="btn btn-small btn-outline-primary" href="{{route('categories.index')}}">Go Back</a>
    </div>
    <div class="card-body">

        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Category</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
                <tr>
                    <td>{{$category->title}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('title')
Category List
@endsection