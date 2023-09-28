@extends('admin.layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Seller <a class="btn btn-small btn-outline-primary" href="{{route('sellers.index')}}">Go Back</a>
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
                </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
                <tr>
                    <td>{{$sellers->shopname}}</td>
                    <td>{{$sellers->location}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('title')
Category List
@endsection