@extends('admin.layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Sellers <a class="btn btn-small btn-outline-primary" href="{{route('sellers.create')}}">Add seller</a>
    </div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Seller</th>
                    <th>Location</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
                @foreach ($sellers as $seller)
                <tr>
                    <td>{{$seller->shopname}}</td>
                    <td>{{$seller->location}}</td>
                    <td><img src="{{ asset('storage/sellerimages/' . $seller->image) }}" width="50" height="50">
                    </td>
                    <td>
                        <a href="{{route('sellers.edit', ['seller' => $seller->id])}}"
                            class="btn btn-outline-primary">Edit</a>
                        <a href="{{route('sellers.show', ['seller' => $seller->id])}}"
                            class="btn btn-outline-info">Show</a>
                        <form action="{{route('sellers.destroy', ['seller' => $seller->id])}}" method="POST"
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
        {{ $sellers->links() }}
    </div>
</div>
@endsection
@section('title')
Sellers List
@endsection